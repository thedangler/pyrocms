<h3>Edit supplier "<?= $supplier->title; ?>"</h3>

<?= form_open_multipart('admin/suppliers/edit/' . $supplier->slug); ?>
		<? foreach ($categories as $category):
		?>
		<?= form_checkbox('category['.$category->id.']', TRUE, $checked); ?> <?=$category->title ?><br />	
		
		<? endforeach; ?>
	</div>
</div>
<? $this->load->view('admin/layout_fragments/table_buttons', array('buttons' => array('save', 'cancel') )); ?>
