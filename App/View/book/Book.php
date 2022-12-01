<div class="col-lg-10 divtwo">
       <div class="row setting noxy">
         <div class="col-lg-12 two">
           <h1>DASHBOARD.</h1>
         </div>

         <div class="col-lg-12 box6 nox table-responsive">
           <h4>BOOK TABLE</h4>
           <table class="table table-dark table-info table-striped table-hover table-bordered">
			<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/addBookDisplay")?>" type="button" class="btn btn-secondary">Add User</a>
				<thead>
					<tr>
						<th>NO BOOK</th>
						<th>ISBN</th>
						<th>TITLE</th>
						<th>SYNOPSIS</th>
						<th>AUTHOR</th>
						<th>PUBLISHER</th>
						<th>CATEGORY</th>
						<th>LANGUAGES</th>
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
							<?php echo $td->isbn?>
						</td>
						<td>
							<?php echo $td->title?>
						</td>
            <td>
							<?php echo $td->synopsis?>
						</td>
            <td>
							<?php echo $td->author?>
						</td>
            <td>
							<?php echo $td->publisher?>
						</td>
            <td>
							<?php echo $td->category?>
						</td>
            <td>
							<?php echo $td->languages?>
						</td>
						<td>
							<?php echo $td->created_at?>
						</td>
            <td>
							<?php echo $td->updated_at?>
						</td>
						<td>
						<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/viewOnebookX/$td->id_book")?>" type="button" class="btn btn-warning">Edit user</a>
						<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/deleteBook/$td->id_book ")?>" type="button" class="btn btn-danger">Delete User</a>
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