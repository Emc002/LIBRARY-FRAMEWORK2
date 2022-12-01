<div class="col-lg-10 divtwo">
       <div class="row setting noxy">
         <div class="col-lg-12 two">
           <h1>DASHBOARD.</h1>
         </div>

         <div class="col-lg-12 box6 nox table-responsive">
           <h4>Inventory Table</h4>
           <table class="table table-dark table-info table-striped table-hover table-bordered">
			<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/addLibrarianDisplay")?>" type="button" class="btn btn-secondary">Add User</a>
				<thead>
					<tr>
						<th>NO LIBRARIAN</th>
						<th>USERNAME</th>
						<th>EMAIL</th>
						<th>CREATED AT</th>
						<th>UPDATED AT</th>
						<th>ACTION</th>
					</tr>
				</thead>

				<tbody>

					<?php
				$N=1;
						foreach($data as $td)
						{
					?>
					<tr>
						<td>
						<?php echo $N++ ?>
						</td>
						<td>
							<?php echo $td->username?>
						</td>
						<td>
							<?php echo $td->email?>
						</td>

						<td>
							<?php echo $td->created_at?>
						</td>
            <td>
							<?php echo $td->updated_at?>
						</td>
						<td>
						<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/viewOneLibrarian/$td->id_librarians")?>" type="button" class="btn btn-warning">Edit user</a>
						<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/deleteLibrarian/$td->id_librarians")?>" type="button" class="btn btn-danger">Delete User</a>
						</td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>




       </div>
     </div>
     </div>

     </div>
     </div>