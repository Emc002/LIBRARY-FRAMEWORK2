<div class="col-lg-10 divtwo">
       <div class="row setting noxy">
         <div class="col-lg-12 two">
           <h1>DASHBOARD.</h1>
         </div>

         <div class="col-lg-12 box6 nox table-responsive">
           <h4>MEMBER TRX TABLE</h4>
           <table class="table table-dark table-info table-striped table-hover table-bordered">
			<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/addMemberTrxDisplay")?>" type="button" class="btn btn-secondary">Add User</a>
				<thead>
					<tr>
						<th>NO LIBRARIAN</th>
						<th>NAME MEMBER</th>
						<th>PHONE</th>
						<th>ADDRESS</th>
						<th>TITLE</th>
						<th>MOTH</th>
						<th>PRICE</th>
						<th>STATUS</th>
						<th>DATE TRX</th>
						<th>TOTAL ORDER</th>
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
							<?php echo $td->name?>
						</td>
            <td>
							<?php echo $td->phone?>
						</td>
            <td>
							<?php echo $td->address?>
						</td>
            <td>
							<?php echo $td->title?>
						</td>
            <td>
							<?php echo $td->month?>
						</td>
            <td>
							<?php echo $td->price?>
						</td>
            <td>
							<?php echo $td->status?>
						</td>
            <td>
							<?php echo $td->date_trx?>
						</td>
            <td>
							<?php echo $td->total_order?>
						</td>
						<td>
							<?php echo $td->created_at?>
						</td>
            <td>
							<?php echo $td->updated_at?>
						</td>
						<td>
						<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/viewOneMemberTrx/$td->id_member_trx")?>" type="button" class="btn btn-warning">EDIT</a>
						<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/deleteMemberTrx/$td->id_member_trx")?>" type="button" class="btn btn-danger">DELETE</a>
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