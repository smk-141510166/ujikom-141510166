<div class="modal text-left fade" id="delete{{ $modal->id}}">
	<div class="modal-dialog">
		<div class="modal-content">
		    {!!Form::open(['method'=>'delete','url'=>$url])!!}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			
			<h4 class="modal-title">{{{$title or "Hapus Data"}}}</h4>
			</div>
			<div class="modal-body">
				<p>{{$message or "Apakah anda yakin ingin menghapus data ini?"}}</p>
			</div>
			<div class="modal-rooter">
				<button type="submit" class="btn btn-primary" data-dismiss="modal">Ya</button>
				<button type="button=" class="btn btn-default" data-dismiss="modal">Tidak</button>
			</div>
			{!!Form::close()!!}
		</div>
	</div>
</div>