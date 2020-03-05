<!DOCTYPE html>
<html>
<head>
	<title>api test</title>
</head>
<body>
	<div><h2>Borrow Book</h2>
		<label>books</label>
		<select id="bkopt"></select>
		<label>user</label>
		<select id="users"></select>
		<input type="date" name="" id="return_date">
		<button onclick="borrowbook()">Borrow</button>
	</div>
	
	<div><h2>Return Book</h2>
		<label>books</label>
		<select id="r-bkopt"></select>
		<label>user</label>
		<select id="r-user"></select>
		<button onclick="returnbook()">Borrow</button>
	</div>

<div>
	<h3>All Books</h3>
	<table id="booktable" border="1">
		<tr>
			<th>Book Title</th>
			<th>Author</th>
			<th>Copies Available</th>
		</tr>
		
	</table>
</div>
<div>
	<h3>Borrowed Books</h3>
	<table id="borrowedbooks" border="1">
		<tr>
			<th>Book Title</th>
			<th>Author</th>
			<th>Borrowed By</th>
			<th>Return Status</th>
			<th>Date Borrowed</th>
			<th>Return Date</th>
			<th>Date Returned</th>
		</tr>
		
	</table>
</div>



<script type="text/javascript" src="../assets/js/jquery.min.js"></script>

	<script type="text/javascript">
		window.onload = function() {
                      listbooks();
                      borrowedbooks();
                      listusers();
                      bookoptions();
                   };

	function listbooks() {
	     document.getElementById('booktable').innerHTML = "";
		$.get("api/books/list",function(data) {
			//console.log(data);
			books = data;
			for (var i = 0; i<books.length; i++) {
				//books[i];
				var rows = "<tr><td>"+books[i].book_title+"</td><td>"+books[i].author+"</td><td>"+books[i].copies+"</td>";
				
				document.getElementById('booktable').innerHTML += rows;
			}
		
			
		});
	}
	function bookoptions() {
	
		$.get("api/books/list/",function(data) {
			//console.log(data);
			var bks = data;
			for (var i = 0; i<bks.length; i++) {
				//users[i];
				var bklist = "<option value="+bks[i].bid+">"+bks[i].book_title+"</option>";
				
				document.getElementById('bkopt').innerHTML += bklist;
				document.getElementById('r-bkopt').innerHTML += bklist;
			}
		
			
		});
	}
	function listusers() {
	
		$.get("api/users/list/",function(data) {
			//console.log(data);
			var usr = data;
			for (var i = 0; i<usr.length; i++) {
				//users[i];
				var users = "<option value="+usr[i].uid+">"+usr[i].full_name+"</option>";
				
				document.getElementById('users').innerHTML += users;
				document.getElementById('r-user').innerHTML += users;
			}
		
			
		});
	}
	function borrowedbooks() {
	    document.getElementById('borrowedbooks').innerHTML = "";
		$.get("api/books/listborrowed",function(data) {
			//console.log(data);
			books = data;
			for (var i = 0; i<books.length; i++) {
				//books[i];
				var rows = "<tr><td>"+books[i].book_title+"</td><td>"+books[i].author+"</td><td>"+books[i].full_name+"</td><td>"+books[i].status+"</td><td>"+books[i].date_borrowed+"</td><td>"+books[i].return_date+"</td><td>"+books[i].date_returned+"</td>";
				document.getElementById('borrowedbooks').innerHTML += rows;
			}
		
			
		});
	}
	function borrowbook() {
	   var book_id = document.getElementById('bkopt').value;
	   var user_id = document.getElementById('users').value;
	   var return_date = document.getElementById('return_date').value;
	   var param = {
			"book_id":book_id,
			"user_id":user_id,
			"return_date": return_date,
			}
		$.post("api/books/borrowbook/",param,function(data,status) {
			console.log(data);
			console.log(status);
			listbooks();
			borrowedbooks();

			
		});
	}
	function returnbook() {
	   var book_id = document.getElementById('r-bkopt').value;
	   var user_id = document.getElementById('r-user').value;
	  
	   var param = {
			"book_id":book_id,
			"user_id":user_id
			}
		$.post("api/books/returnbook/",param,function(data,status) {
			console.log(data);
			console.log(status);
			listbooks();
			borrowedbooks();
			
		});
	}
	</script>

</body>
</html>