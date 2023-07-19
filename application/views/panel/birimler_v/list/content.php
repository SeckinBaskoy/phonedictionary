<!-- DOM dataTable -->
<div class="col-md-12">
	<div class="widget">
		<header class="widget-header">
			<h4 class="widget-title">Unit Identifications Listing 
				<?php if(isAllowedWriteModule()){?>
				<a href="<?=base_url("birimler/new_form");?>" class="btn pull-right btn-xs btn-primary btn-outline"><i class="fa fa-plus"></i> Add New</a>
				<?php } ?>
			</h4>
		</header>
		<hr class="widget-separator">
		<div class="widget-body">
			<div class="table-responsive">
				<?php if(empty($items)) { ?>
				<div class="alert alert-info text-center">
								<p>BThere is no record found. To add new record <a href="<?=base_url("birimler/new_form");?>">click here.</a></p>
							</div>
				<?php } else { ?>
				<table  id="default-datatable" data-plugin="DataTable" class="table table-hover" cellspacing="0" width="100%"><?php // data-plugin="DataTable" ?>
					<thead>
						<tr>
							<th>#id</th>
							<th>Unit Name</th>
							<th>State</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($items as $item) { ?>
						<tr>
							<td><?=$item->id;?></td> <?php //$item->id;?>
							<td><?=$item->Birim_Adi;?></td>
							<td>
								<input 
									data-url="<?=base_url("birimler/isActiveSetter/").$item->id;?>"
									class="isActive form-control" type="checkbox" data-color="#10c469"
									<?php echo ($item->isActive) ? "checked" : "";?>
									>
							</td>
							<td>
								<?php if(isAllowedDeleteModule()){?>
								<a href="#"	data-url="<?=base_url('birimler/delete/').$item->id;?>"	class="btn btn-sm btn-danger btn-outline remove-btn"><i class="fa fa-trash"></i> Delete</a>
								<?php } ?>
								<?php if(isAllowedUpdateModule()){?>
								<a href="<?=base_url('birimler/update_form/').$item->id;?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Edit</a>
								<?php } ?>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			<?php } ?>
			</div>
		</div><!-- .widget-body -->
	</div><!-- .widget -->
</div><!-- END column -->