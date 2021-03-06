<div id="addTransactionModal" class="modal fade">
	<div class="modal-dialog">
		<form class="modal-content form-horizontal" method="POST" action="/transactions">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="cleared" value="0">
			<input type="hidden" name="flair" value="lightgray">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Add a Transaction</h4>
			</div>
			<div class="modal-body">
				@include('transaction._form', [
					'useDefaults' => true
				])
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</form>
	</div>
</div>