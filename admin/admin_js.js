function books(id){
    
var book_id= document.getElementById("id_"+id).value;
//alert(book_id);  
var name= document.getElementById("name_"+id).value;
//alert(name);
var author = document.getElementById("author_"+id).value;
//alert(author);
var publication= document.getElementById("publication_"+id).value;
//alert(publication);
var edition= document.getElementById("edition_"+id).value;
//alert(edition);

    $.ajax({
         
		type: 'GET',
		url: 'insert_books_database.php',
		data: {name:name,book_id:book_id,author:author,publication:publication,edition:edition},
		success: function(data) {
	$("#a").html(data);
		}
		});	
    
}
function enter_book(id,copies)
{
//alert(id);
//alert(copies);
var show_dialog=window.prompt("enter the no of books you want to delete");
if(show_dialog>copies)
{alert("no of copies exceeded");
}
else
{
var deleted=show_dialog;

window.location.href="delete_books.php?id="+id+"&copies="+deleted;
/* $.ajax({
			type: 'GET',
			url: 'delete_books.php',
			data: {id:id,copies:deleted},
			success: function(data)
			{
	         window.location.href="edit_books_deteils?deleted";
			}
			}); */
}
}