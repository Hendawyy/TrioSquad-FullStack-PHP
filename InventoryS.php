<?php
$Classes = array("table-primary", "table-secondary", "table-success", "table-info", "table-warning", "table-danger", "table-light");
?>
<html lang="en">
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<?php
session_start();
include('DBCONN.php');
if(isset($_SESSION['UserID'])){
$ID = $_SESSION['UserID'];
$result = $mycon->query("SELECT Sname,Admin,Image FROM salesperson Where SID = $ID");
$res = mysqli_fetch_array ($result);
$Admin = $res['Admin'];
if($Admin == 'Yes'){
?>

<head>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shoes Inventory</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Noto+Sans:400,700&display=swap');

.confirm {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    padding: 10px;
    box-sizing: border-box;

    opacity: 0;
    animation-name: confirm---open;
    animation-duration: 0.2s;
    animation-fill-mode: forwards;

    display: flex;
    align-items: center;
    justify-content: center;
}

.confirm--close {
    animation-name: confirm---close;
}

.confirm__window {
    width: 100%;
    max-width: 600px;
    background: white;
    font-size: 14px;
    font-family: 'Noto Sans', sans-serif;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);

    opacity: 0;
    transform: scale(0.75);
    animation-name: confirm__window---open;
    animation-duration: 0.2s;
    animation-fill-mode: forwards;
    animation-delay: 0.2s;
}

.confirm__titlebar,
.confirm__content,
.confirm__buttons {
    padding: 1.25em;
}

.confirm__titlebar {
    background: #222222;
    color: lavender;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.confirm__title {
    font-weight: bold;
    font-size: 1.1em;
	color: lavender;
}

.confirm__close {
    background: none;
    outline: none;
    border: none;
    transform: scale(2.5);
    color: #ffffff;
    transition: color 0.15s;
}

.confirm__close:hover {
    color: #ff0000;
    cursor: pointer;
}

.confirm__content {
    line-height: 1.8em;
}

.confirm__buttons {
    background: #eeeeee;
    display: flex;
    justify-content: flex-end;
}

.confirm__button {
    padding: 0.4em 0.8em;
    border: 2px solid #009879;
    border-radius: 5px;
    background: #ffffff;
    color: #009879;
    font-weight: bold;
    font-size: 1.1em;
    font-family: 'Noto Sans', sans-serif;
    margin-left: 0.6em;
    cursor: pointer;
    outline: none;
}

.confirm__button--fill {
    background: Crimson;
    color: #ffffff;
	border-color: crimson;
}

.confirm__button:focus {
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
}

@keyframes confirm---open {
    from { opacity: 0 }
    to { opacity: 1 }
}

@keyframes confirm---close {
    from { opacity: 1 }
    to { opacity: 0 }
}

@keyframes confirm__window---open {
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.bs-example{
	margin: 20px;
}
*{
	color:Black;
	align-content: center;
}
	thead{
		
	}
	td{
		 padding: 20px 15px;
		
	}
table{
	text-align: center;
	border-collapse: separate;
	border-color: aliceblue;
}
.a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}


	.img{
	border: 3px solid;
    border-color: #daeff1;
    height: 100px;
    margin: 0.5rem 0;
    width: 100px;
	border-radius: 50%;
  	height: 100px;
  	width: 100px;
}
#myInput {
background-image: url('/images/—Pngtree—search icon_4699282.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
   font-size: 16px;
  padding: 12px 20px 12px 40px;

  margin-bottom: 12px;
}
.form__group {
  position: relative;
  padding: 15px 0 0;
  margin-top: 10px;
  width: 50%;
}

.form__field {
  font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid aqua;
  outline: 0;
  font-size: 1.3rem;
  color: black;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}
.form__field::placeholder {
  color: black;
	text-align: center;
}
.form__field:placeholder-shown ~ .form__label {
  font-size: 1.3rem;
  cursor: text;
  top: 20px;
}



.form__field:focus {
  padding-bottom: 6px;
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #11998e, #38ef7d);
  border-image-slice: 1;
}
.form__field:focus {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
 
  font-weight: 700;
}
input[type=text]{
	color: black;
	text-align: center;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color:deeppink;} /* Blue */
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: blueviolet;} /* blueviolet */ 
#myTable {}
</style>
<script>
const Confirm = {
    open (options) {
        options = Object.assign({}, {
            title: '',
            message: '',
            okText: 'Yes',
            cancelText: 'No',
            onok: function () {},
            oncancel: function () {}
        }, options);
        
        const html = `
            <div class="confirm">
                <div class="confirm__window">
                    <div class="confirm__titlebar">
                        <span class="confirm__title">${options.title}</span>
                        <button class="confirm__close">&times;</button>
                    </div>
                    <div class="confirm__content">${options.message}</div>
                    <div class="confirm__buttons">
                        <button class="confirm__button confirm__button--ok confirm__button--fill">${options.okText}</button>
                        <button class="confirm__button confirm__button--cancel">${options.cancelText}</button>
                    </div>
                </div>
            </div>
        `;

        const template = document.createElement('template');
        template.innerHTML = html;

        // Elements
        const confirmEl = template.content.querySelector('.confirm');
        const btnClose = template.content.querySelector('.confirm__close');
        const btnOk = template.content.querySelector('.confirm__button--ok');
        const btnCancel = template.content.querySelector('.confirm__button--cancel');

        confirmEl.addEventListener('click', e => {
            if (e.target === confirmEl) {
                options.oncancel();
                this._close(confirmEl);
            }
        });

        btnOk.addEventListener('click', () => {
            options.onok();
            this._close(confirmEl);
        });

        [btnCancel, btnClose].forEach(el => {
            el.addEventListener('click', () => {
                options.oncancel();
                this._close(confirmEl);
            });
        });

        document.body.appendChild(template.content);
    },

    _close (confirmEl) {
        confirmEl.classList.add('confirm--close');

        confirmEl.addEventListener('animationend', () => {
            document.body.removeChild(confirmEl);
        });
    }
};

</script>

</head>
<body>
<?php
include('NAv.php');
$Q;
$TQ;
$X;
$ST;
$ZAD;
?>

<center>
<div class="form__group field">
<input type="text"  class="form__field"  id="myInput" onkeyup="myFunction()" placeholder="Search for Shoe.."/><br><br><br>
</div></center>
<div align="center">
<a class="button" style="background:green;" href="ExportallShoes.php">Export To Excel</a>
</div><br><br><br>	
<div class="bs-example">
    <table class="table table-striped table-dark" id ='myTable'>
        <thead class="thead-dark">
            <tr>
                <th>Image</th>
                <th>Model</th>
                <th>Brand</th>
                <th>Minimum Price</th>
                <th>Actual Price</th>
                <th>Size / Quantity</th>
                <th>Totals</th>
                <th>Edit Shoe Data</th>
                <?php
                if($ID == 1){
                ?>
                <th>Delete Shoe Data</th>
                <?php
                }
                ?>
            </tr>
        </thead>
        <tbody>
			<?php
			error_reporting(0);
			include("DBCONN.php");
				static $i=0;
			$Shoes = mysqli_query($mycon,'SELECT * FROM `shoes` ORDER BY Model');
			while ( $res = mysqli_fetch_array ($Shoes)){
				$img = $res['Image'];							
?>
            <tr class="<?php echo $Classes[$i] ;?>">
                <td style="padding-top:55px;"><a href="Shoe.php?ID=<?php echo $res['ID'];?>" class="text-dark"><img class='img' src="images/Shoes/<?php echo $img ;?>"alt='<?php echo $res['Model'] ;?>'></a></td>
                <td style="padding-top:100px;"><?php echo $res['Model'];?></td>
                <td style="padding-top:100px;"><?php echo $res['Brand'] ;?></td>
				<td style="padding-top:100px;"><?php echo $res['Price'] ;?></td>
				<td style="padding-top:100px;"><?php echo $res['ActualPrice'] ;?></td>
                <td><?php
						$Sizes = $mycon->query("SELECT * FROM shoesquantity WHERE ID = '$res[ID]'");
						while ($rez = mysqli_fetch_array ($Sizes)){
							if($rez['Quantity'] > 0){
					?>
							<span style='color:DarkMagenta;font-weight:400;'>Size: <?php echo $rez['Size'];?>&nbsp;&nbsp; Quantity: <?php echo $rez['Quantity'];?></span><br>
							
				<?php
				$Q += $rez['Quantity'];
				$TQ += $rez['Quantity'];
				$X = $res['ActualPrice']*$Q;
					} 
						}
				$ST += $X;
				?><br>
					<a class="a" href="SQUpdate.php?ID=<?php echo $res['ID'];?>">Edit Quantity</a><br><br>
					<a class="a" href="AddNSize.php?ID=<?php echo $res['ID'];?>">Add New Size</a>
				</td>
				<td style="font-size:20px;font-weight:bolder;padding-top:60px;">
				
				    <span style='color:crimson;'><?php echo $Q;$Q=0;?></span> <span style='colorcolor:navy;font-weight:bolder;;'>Pairs Of The </span><span style='color:Blueviolet;'><?php echo $res['Model'] ;?></span>
				<br>
			<span style='color:Blueviolet;'>The Actual Price Per </span><span style='color:navy;font-weight:bolder;'><?php echo $res['Model'] ;?></span> is : <span style='color:crimson;'><?php echo number_format($X);?> LE.</span>
				
				<?php
				$X=0;
				?>
				</td>
				<td style="padding-top:100px;"><a href="EditShoe.php?ID=<?php echo $res['ID'];?>"><i class="fa fa-edit" style='font-size:38px;color:Skublue'></i></a></td>
				<?php
				if($ID == 1){
                ?>
                 <td style="padding-top:100px;"><a id="btnChangeBg<?php echo $res['ID'];?>" style="cursor:pointer;"><i class="fa fa-trash" style='font-size:38px;color:Crimson'></i></a></td><td></td>
				<script>
  document.querySelector('#btnChangeBg<?php echo $res['ID'];?>').addEventListener('click', () => {
    Confirm.open({
      title: 'Delete Shoe',
      message: 'Are You Sure You Want To Delete This Shoe ??!',
		onok: () => {
			window.location.href = "DeleteSHOE.php?ID=<?php echo $res['ID'];?>";
      }
    })
  });
</script>
                <?php
                }
                ?>
            </tr>
<?php
if($i == 6){
	$i=0;
}else{
	$i++;
}

}
?>

            <tr class="<?php echo $Classes[$i] ;?>">
                <td></td><td></td><td></td><td style='color:Crimson;font-weight:bolder;font-size:18px;'>Total Actual Price Of Shoes in The Inventory</td>
                <td style='color:navy;font-weight:bolder;font-size:20px;'><?php echo number_format($ST);?> LE.</td><td></td> <td style='color:Crimson;font-weight:bolder;font-size:18px;'>Total Number Of Shoes in The Inventory</td>
                <td style='color:navy;font-weight:bolder;font-size:20px;'><?php echo $TQ;?> Pieces.</td><td></td><td></td>
            </tr>
        </tbody>
    </table>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    td2 = tr[i].getElementsByTagName("td")[5];
    if (td) {
		
      txtValue = td.textContent || td.innerText;
      var ztxtValue = td2.textContent || td2.innerText;
		
      if (txtValue.toUpperCase().indexOf(filter) > -1|| ztxtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</div>
<form>
<div align='center'>
<button class="button" formaction="AddShoe.php">Add New Shoes</button><br><br><br><br>
<button class="button button1" formaction="EmployeeS.php">View Employees</button><br><br><br><br>
<button class="button button2" formaction="SellerOrders.php">View My Orders</button><br><br><br><br>
<button class="button button4" formaction="a.php">View All Orders</button><br><br><br><br>
<button class="button button3" formaction="Logout.php">Logout</button><br><br><br><br>
</div>
</form>
</body>
<?php
}else{
	require('E7.php');
}
}else if(!isset($_SESSION['UserID'])){
	require('UserLogin.php');
}
?>
</html>