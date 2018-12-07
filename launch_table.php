<!--<div>
    <ul>
        <form action = "launch_table_2.php" method = "POST">
            <b>Name:</b><br>
          
           /* $i = 1;
            while($row = $res->fetch_assoc()) {
                $temp = $row["name"];
                $arr = $row["arrTime"];
                $dep = $row["depTime"];
                $price = $row["price"];

                <tr>
                <th scope="row">$i</th>
                <td><h3>$temp</h3></td>
                <td>$dep</td>
                <td>$arr</td>
                <td>BDT $price</td>
                <td><button type="submit" name = 'selected_launch' value= '$temp'  class="btn btn-success" >Select Seats</button></td>
                </tr>

           // echo "<input type= 'radio' name = 'selected_launch' value= '$temp' >$temp<br>";
            }
           ?>*/
           <!-- <input type='submit' value="Show Avaiable Cabines">
        </form>
    </ul>
</div>
-->
<div>
		<section class="departure animate-box" style="    margin-top: -225px;">
							<!--<h1 style="margin: 50px;text-align: center;color: orange;">Daparture</h1>-->
			<div class="container" >
				<h2 style ="    font-size: 34px;">Available Launches</h2>
				<div class="row">
					<div class="column">
						<div class="btn-group" style="    margin-bottom: 12px;margin-top: 28px;" >
                                <button style=" background-color: #4caf50 ;"><span class="glyphicon glyphicon-chevron-left"></span> Prev day</button>
                                <button style=" background-color: #4caf50 ;"><span class="glyphicon glyphicon-chevron-right"></span>Next day</button>
                                <button style=" background-color: #4caf50 ;">Modify search<span class="glyphicon glyphicon-search"></span></button>
						</div>
								    <table class="table animate-box">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Launch/Ship</th>
                                            <th scope="col">Dep.time</th>
                                            <th scope="col">Arr.Time</th>
                                            <th scope="col">Fare Range</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                         <!--   <tr>
                                            <th scope="row">1</th>
                                            <td><h3>Surovi 9</h3>
                                                <p>Operated by Surovi Group of Companies</p></td>
                                            <td>8.30 pm</td>
                                            <td>3.00 am</td>
                                            <td>BDT 300-5000</td>
                                            <td><button type="button" class="btn btn-success" >Select Seats</button></td>
                                            </tr>
                                            <tr>
                                            <th scope="row">2</th>
                                            <td><h3>Surovi 8</h3>
                                                <p>Operated by Surovi Group of Companies</p></td>
                                            <td>9.30 pm</td>
                                            <td>4.00 am</td>
                                            <td>BDT 300-5000</td>
                                            <td><button type="button" class="btn btn-success" >Select Seats</button></td>
                                            </tr>
                                            <tr>
                                            <th scope="row">3</th>
                                            <td><h3>Takwa</h3>
                                                <p>Operated by Surovi Group of Companies</p></td>
                                            <td>7.30 pm</td>
                                            <td>2.00 am</td>
                                            <td>BDT 300-5000</td>
                                            <td><button type="button" class="btn btn-success" >Select Seats</button></td>
                                            </tr>-->

                                               <?php
                                                $i = 1;
                                                while($row = $res->fetch_assoc()) {
                                                    $temp = $row["name"];
                                                    $arr = $row["arrTime"];
                                                    $dep = $row["depTime"];
                                                    $price = $row["price"];
                                                ?>
                                                <form action = "departure2.php" method = "POST">
                                                <tr>
                                                <th scope="row"><?php echo $i; ?></th>
                                                <td><h3><?php echo $temp; ?></h3></td>
                                                <td><?php echo $dep; ?></td>
                                                <td><?php echo $arr; ?></td>
                                                <td>BDT <?php echo $price; ?></td>
                                                <td>
                                                <button type="submit" name = "selected_launch" value= "<?php $temp; ?>" class='btn btn-success' >Select Seats</button></td>
                                                </tr>
                                                </form>
                                                <?php
                                                $i++;
                                                }
                                                ?>

                                        </tbody>
									</table>
								</div>
							</div>
		</section>
		<!-- departure section ends -->		
</div>