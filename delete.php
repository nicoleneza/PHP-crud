
<style>
    body {
    font-size: 19px;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}
</style>
<table>
	<thead>
		<tr>
			<th>username</th>
			<th>password</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php 
    include('del.php');
    include('db.php');

    $data = mysqli_query($conn, "SELECT * FROM user");
    $result = mysqli_num_rows($data);
    if($result){
    while ($row = mysqli_fetch_array($data)) { ?>
		<tr>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['password']; ?></td>
			<td>
				<a href="update.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="signup.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php }}?>



</table>
