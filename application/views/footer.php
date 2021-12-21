<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <?=date('Y')?> solutions1313 </div>
                            <div>
                              Designed and Developed by <a href = "https://solutions1313.com/">Solutions1313</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>public/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>public/assets/demo/chart-area-demo.js"></script>
        <script src="<?=base_url()?>public/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>public/assets/demo/datatables-demo.js"></script>
		<script src = "<?=base_url()?>public/ckeditor/ckeditor.js"></script>
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>

<script>
	CKEDITOR.replace('description');
	CKEDITOR.replace('post');

    function selectall(){
		if(jQuery('#checkall').prop("checked")){
			jQuery('input[type=checkbox]').each(function(){
			jQuery('#' + this.id).prop('checked',true);
		    });
		}else{
			jQuery('input[type=checkbox]').each(function(){
				jQuery('#'+this.id).prop('checked',false);
			});
	    }
	}
	$(document).on("click", "#selectall", function(){
		alert("Hello");
		if(jQuery('#checkall').prop("checked")){
		jQuery('input[type=checkbox]').each(function(){
			jQuery(this.data-sid).prop('checked',true);
		});
	}else{
		jQuery('input[type=checkbox]').each(function(){
			jQuery('#'+this.id).prop('checked',false);
		});
	}
	});
	function activate_status(option){
		var id = [];
		$(".status-checkbox:checked").each(function(key){
			id[key] = $(this).val();
		});
		
		if(id.length > 0){
			$.ajax({
			type: "POST",
			url: "changestatus",
			data: {id: id, option: option},
			success: function(data){
				window.location.href = "<?=base_url()?>AdminController/whitelist";
			}
		  });
		}
		
	}

	function exportfile(){
		// alert("slsfa");
		let data = document.querySelector('.export-table');
		var fp = XLSX.utils.table_to_book(data, {sheet: 'order'});
		XLSX.write(fp, {
			bookType: 'xlsx',
			type: 'base64'
		});
		XLSX.writeFile(fp, 'order.xlsx');
	}
</script>
    </body>
</html>
