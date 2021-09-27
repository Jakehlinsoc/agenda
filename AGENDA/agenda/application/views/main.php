<h1><center>AGENDA ELECTRONICA</center></h1>

<div class="p-2">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contacto">
  		Crear Contacto
	</button>
</div>	



<div class="p-2">
	<table class=" table table-striped table-bordered dt-responsive table-hover table-condensed">
		<thead>
		<tr>
			<th>ID</th>
			<th>TELEFONO</th>
			<th>NOMBRE</th>
			<th>APELLIDOS</th>
			<th>TIPO DE TELEFONO</th>
			<th>OBSERVACIONES</th>
		</tr>
		</thead>
		<tbody>	
		<?php
		foreach($contactos as $contacto)
		{
			echo "<tr>"."<td>".$contacto->ID."</td>".
			"<td>".$contacto->TELEFONO."</td>".
			"<td>".$contacto->NOMBRES."</td>".
			"<td>".$contacto->APELLIDOS."</td>".
			"<td>".$contacto->TIPO_TELEFONO_ID."</td>".
			"<td>".$contacto->OBSERVACIONES."</td>"."</tr>";
		}
	?>		
			</tbody>
	
	
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="contacto" tabindex="-1" aria-labelledby="contactoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactoLabel">Administrar contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	<form  action="<?=base_url("index.php/Welcome/save")?>" method="POST">
			<div class="form-group">
				<input type='text' class='form-control' id="telefono" placeholder='TELEFONO' name='telefono' maxlength='50' required='required' value=''/>
			</div>

			<div class='form-group'>
				<input type='text' class='form-control' id="nombres" placeholder='NOMBRES' name='nombres' maxlength='50' required='required' value=''/>
			</div>

			<div class='form-group'>
				<input type='text' class='form-control' id="apellidos" placeholder='APELLIDOS' name='apellidos' maxlength='50' required='required' value=''/>
			</div>

			<div class='form-group'>
				<select  class="form-control" id="tipo_telefono">		
					<option value=""> ELIGE UN TIPO DE TELEFONO</option>
						<?php 
							foreach($tipo_telefono as $row)
								{
									echo '<option value="'.$row->ID.'">'.$row->TIPO.'</option>';
								}

						?>

				</select>
			</div>
			<div class='form-group'>
				<input type='text' class='form-control' id="observaciones" placeholder='OBSERVACIONES' name='observaciones' maxlength='50' required='required' value=''/>
			</div>
      
      		<div class="modal-footer">
	  			<input type="submit" name="action" class="btn btn-success" value="GUARDAR CONTACTO" /> 
	 	 		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
 
     		 </div>
		</form>
   	</div>
	</div>
</div>
</div>

<script type="text/javascript" language="javascript" >  
   
     /* $(document).on('submit', '#frmNuevoContacto', function(event){  
           event.preventDefault();  
           var nombre = $('#nombre').val();  
           //var lastName = $('#last_name').val();  
           //var extension = $('#user_image').val().split('.').pop().toLowerCase();  
           /*//*if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
           {  
                alert("Invalid Image File");  
                $('#user_image').val('');  
                return false;  
           } */ 
           /*if(nombre != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url() . 'Welcome/user_action'?>",  
                     method:'POST',  
                     data:new FormData(this),  
                     contentType:false,  
                     processData:false,  
                     success:function(data)  
                     {  
                          alert(data);  
                          $('#frmNuevoContacto')[0].reset();  
                          $('#userModal').modal('hide');  
                          dataTable.ajax.reload();  
                     }  
                });  
           }  
           else  
           {  
                alert("Bother Fields are Required");  
           }  
      });/*  
 
 </script>  

