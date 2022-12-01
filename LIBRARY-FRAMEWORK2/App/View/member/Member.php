<div class="col-lg-10 divtwo">
       <div class="row setting noxy">
         <div class="col-lg-12 two">
           <h1>DASHBOARD.</h1>
         </div>

         <div class="col-lg-12 box6 nox table-responsive">
           <h4>Inventory Table</h4>
           <table class="table table-dark table-info table-striped table-hover table-bordered">
			<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/addMemberDisplay")?>" type="button" class="btn btn-secondary">Add User</a>
				<thead>
					<tr>
						<th>NO LIBRARIAN</th>
						<th>NIK</th>
						<th>NAME</th>
						<th>PHONE</th>
						<th>ADDRESS</th>
						<th>BORN PLACE</th>
						<th>BORN DATE</th>
						<th>GENDER</th>
						<th>COUNTRY</th>
						<th>NATIONALITY</th>
						<th>STATUS</th>
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
							<?php echo $td->nik?>
						</td>
						<td>
							<?php echo $td->name?>
						</td>
            <td>
							<?php echo $td->phone?>
						</td>
            <td>
							<?php echo $td->address?>
						</td>
            <td>
							<?php echo $td->born_place?>
						</td>
            <td>
							<?php echo $td->born_date?>
						</td>
            <td>
							<?php echo $td->gender?>
						</td>
            <td>
							<?php echo $td->country?>
						</td>
            <td>
							<?php echo $td->nationality?>
						</td>
            <td>
							<?php echo $td->status?>
						</td>
						<td>
							<?php echo $td->created_at?>
						</td>
            <td>
							<?php echo $td->updated_at?>
						</td>
						<td>
						<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/viewOneMember/$td->id_member")?>" type="button" class="btn btn-warning">Edit user</a>
						<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/deleteMember/$td->id_member")?>" type="button" class="btn btn-danger">Delete User</a>
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