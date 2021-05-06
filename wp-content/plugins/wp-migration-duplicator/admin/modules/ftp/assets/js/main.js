(function( $ ) {
	//'use strict';
	$(function() {	
		var wt_iew_ftp = {

			onEdit:false,
			Set:function() {
				this.saveData();
				this.loadList();
			},
			loadList:function() {
				$('.wp_migration_duplicator_ftp_list').html('<div class="ftp_loader">'+wp_migration_duplicator_ftp.msgs.wait+'</div>');
				$.ajax( {
					url		: wp_migration_duplicator_ftp.ajax_url,
					data	: {
						'action' : 'wp_mgdp_ftp_ajax',
						_wpnonce : wp_migration_duplicator_ftp.nonces.main,
						'wt_mgdp_update_action':'ftp_list'
					},
					type		: 'post',
					dataType	: "html",
					success:function( data ) {
						$('.wp_migration_duplicator_ftp_list').html( data );
						wt_iew_ftp.regEvents();
					},
					error:function() {
						wp_migration_duplicator_notify_msg.error( wp_migration_duplicator_ftp.msgs.error );
						$('.wp_migration_duplicator_ftp_list').html('<div class="wp_migration_duplicator_ftp_loader">'+wp_migration_duplicator_ftp.msgs.error+'</div>');
					}
				} );
			},
			regEvents:function() {
				$('.wt_mgdp_ftp_edit').click(function(){
					wt_iew_ftp.switchTab(wp_migration_duplicator_ftp.msgs.edit, wp_migration_duplicator_ftp.msgs.edit_hd, true);
					var form_data_dv=$(this).parents('td').find('.wt_mgdp_data_dv');
					form_data_dv.find('span').each(function(){					
						var cls				=	$(this).attr('class');
						var val				=	$.trim($(this).text());
						var frm_input		=	$('[name="'+cls+'"]');
						var frm_input_type	=	frm_input.attr('type');

						if( frm_input_type == 'text' || frm_input_type=='hidden' || frm_input_type=='password' || frm_input_type=='number' ) {
							frm_input.val(val);
						} else if( frm_input_type=='radio' ) {
							frm_input.prop('checked',false).filter(function(){ return $(this).val()==val; }).prop('checked',true);
						}
						
					});
				});

				$('.wf_sub_tab li[data-target="ftp-profiles"]').click(function(){
					wt_iew_ftp.switchTab(wp_migration_duplicator_ftp.msgs.add_new, wp_migration_duplicator_ftp.msgs.add_new_hd,false);	
				});

				$('.wf_sub_tab li[data-target="add-new-ftp"]').click(function(){
					if(!wt_iew_ftp.onEdit) {
						$('#wp_migration_duplicator_ftp_form').trigger('reset');
						$('[name="wt_mgdp_ftp_id"]').val(0);
					}
				});

				$('.wt_mgdp_ftp_delete').click(function(){
					if(confirm(wp_migration_duplicator_ftp.msgs.sure))
					{
						wt_iew_ftp.deleteData($(this));
					}
				});

			

				$('select[name="wt_mgdb_export_ftp_profiles"]').on('change',function(){
					var element = $(this).find('option:selected'); 
        			var path = element.attr("data-path"); 
					$('input[name="wt_mgdb_export_path"]').val( path );
				});

				$('select[name="wt_mgdb_import_ftp_profiles"]').on('change',function(){
					var element = $(this).find('option:selected'); 
        			var path = element.attr("data-path"); 
					$('input[name="wt_mgdb_import_path"]').val( path );
				});
				$('#wpmgd_enable_ftp').on('change',function(){
					var is_enabled = $(this).is(':checked');
					$.ajax({
						url:wp_migration_duplicator_ftp.ajax_url,
						data: {
							'action':'wp_mgdp_ftp_ajax',
							_wpnonce:wp_migration_duplicator_ftp.nonces.main,
							'wt_mgdp_update_action':'enable_disabe_ftp',
							'is_enabled':is_enabled
						},
						type:'post',
						dataType:"json",
						success:function( data ) {

						}
					});
				});

				

			},
			deleteData:function(elm) {
				var id=elm.attr('data-id');
				elm.html(wp_migration_duplicator_ftp.msgs.wait);
				$.ajax({
					url:wp_migration_duplicator_ftp.ajax_url,
					data: {
						'action':'wp_mgdp_ftp_ajax',
						_wpnonce:wp_migration_duplicator_ftp.nonces.main,
						'wt_mgdp_update_action':'delete_ftp',
						'wp_migration_duplicator_ftp_id':id
					},
					type:'post',
					dataType:"json",
					success:function( data ) {
						if(data.status==true) {
							wt_iew_ftp.loadList();
							wp_migration_duplicator_notify_msg.success(wp_migration_duplicator_ftp.msgs.success);
						} else {
							wp_migration_duplicator_notify_msg.error(data.msg);
							elm.html(wp_migration_duplicator_ftp.msgs.delete);
						}
					},
					error:function() {
						wp_migration_duplicator_notify_msg.error(wp_migration_duplicator_ftp.msgs.error);
						elm.html(wp_migration_duplicator_ftp.msgs.delete);
					}
				});
			},
			saveData:function() {
				$('#wt_mgdp_ftp_form').submit(function(e) {
					e.preventDefault();
					$('.wp_migration_duplicator_ftp_warn').hide();
					var er=0;
					$(this).find('input[type="text"], input[type="number"], input[type="password"]').each(function(){
						if($(this).val()=="") {
							er=1;
							alert
						}
					});

					if(er==0) {
						$(this).find('input[type="radio"]').each(function(){
							var nme=$(this).attr('name');					
							if($('[name="'+nme+'"]:checked').length==0) {
								er=1;
							}
						});
					}

					if(er==1) {
						wp_migration_duplicator_notify_msg.error(wp_migration_duplicator_ftp.msgs.mandatory);
						return false;
					}
					$.ajax( {
						url:wp_migration_duplicator_ftp.ajax_url,
						data:$(this).serialize(),
						type:'post',
						dataType:"json",
						success:function(data) {
							if( data.status == true ) {
								$('.wf_sub_tab li[data-target="ftp-profiles"]').trigger('click');
								wt_iew_ftp.loadList();
								wp_migration_duplicator_notify_msg.success(wp_migration_duplicator_ftp.msgs.success);
							} else {
								wp_migration_duplicator_notify_msg.error(data.msg);
							}
						},
						error:function() {
							wp_migration_duplicator_notify_msg.error(wp_migration_duplicator_ftp.msgs.error);
						}
					});
				});
			},
			switchTab: function(new_txt, new_hd_txt, change_tab) {
				var elm=$('.wf_sub_tab li[data-target="add-new-ftp"]');
				if(change_tab)
				{
					this.onEdit=true;
					elm.trigger('click');
				}else
				{
					this.onEdit=false;
				}
				elm.find('a').html(new_txt);
				$('.wp_migration_duplicator_form_title').text(new_hd_txt);
			}
		}
		wt_iew_ftp.Set();

	});
})( jQuery );
