

$(document).ready(function()
{
	$('table#id td a.id').click(function()
	{
		if (confirm("Are you sure you want to delete this row?"))
		{
			var id = $(this).parent().parent().attr('id');
			var data = 'id=' + id ;
			var parent = $(this).parent().parent();

			$.ajax(
			{
				type: "POST",
				url: "Deletefrm.php",
				data: data,
				cache: false,

				success: function()
				{
					parent.fadeOut('slow', function() {$(this).parent('tr').remove();});
				}
			});
		}
	});
