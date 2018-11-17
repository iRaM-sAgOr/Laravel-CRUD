@include('inc.header')

    <div class= 'container'>
    	<div class= 'row'>
            <table class="table table-striped table-hover ">
					  <thead>
					    <tr class="info">
					      <th>ID</th>
					      <th>Title</th>
					      <th>Description</th>
					      <th>Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@if(count($articles)>0)
					        @foreach($articles->all() as $article)

					    <tr>
					      <td>1</td>
					      <td>Column content</td>
					      <td>Column content</td>
					      <td>
                           <a href="{{ url('') }}" class='label label-primary'>READ</a>
                           <a href="{{ url('') }}" class='label label-success'>UPDATE</a>
                           <a href="{{ url('') }}" class='label label-danger'>DELETE</a>
					      </td>
					    </tr>
					         @endforeach
					     @endif
					    
					  </tbody>
					</table> 
								</table>
    	</div>
    </div>
 


@include('inc.footer')

