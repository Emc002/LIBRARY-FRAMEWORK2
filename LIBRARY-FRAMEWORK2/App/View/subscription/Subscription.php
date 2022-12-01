<div class="col-lg-10 divtwo">
       <div class="row setting noxy">
         <div class="col-lg-12 two">
           <h1>DASHBOARD.</h1>
         </div>

         <div class="col-lg-12 box6 nox table-responsive">
           <h4>SUBSCRIPTION TABLE</h4>
           <table class="table table-dark table-info table-striped table-hover table-bordered">
			<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/addSubscriptionDisplay")?>" type="button" class="btn btn-secondary">Add SUBSCRIPTION</a>
				<thead>
					<tr>
						<th>NO SUBSCRIPTION</th>
						<th>TITLE</th>
						<th>MONTH</th>
						<th>PRICE</th>
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
							<?php echo $td->created_at?>
						</td>
            <td>
							<?php echo $td->updated_at?>
						</td>
						<td>
						<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/viewOneSubscription/$td->id_subscription")?>" type="button" class="btn btn-warning">Edit user</a>
						<a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/deleteSubscription/$td->id_subscription")?>" type="button" class="btn btn-danger">Delete User</a>
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