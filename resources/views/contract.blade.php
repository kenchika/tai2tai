@extends('layouts.app')
<script src="{{ asset('js/contract.js') }}" defer></script>
@section('content')

<div class="container-fluid bg-secondary" style="height: 20vh;" >

	<div class="container pt-5">





		<div class="position-relative overflow-hidden  text-dack row py-5" >
			<div class="col-md-5 col-sm-12 py-5"></div>
			<div class="col-md-7 py-5 " >



			</div>

		</div>
	</div>
</div>

<div class="container home-card bg-white px-5 py-5 mb-5" style="margin-top:-100px">


	<div class="row justify-content-center "  >
		<div class="col-md-12">

			<h1 class="mdc-typography--headline4 font-weight-bold text-left pb-2">My contract n° {{$contract->id}}</h1>
			<div class="mdc-typography--button text-left ">State : {{$contract->contractState}}</div>
			<div class="mdc-typography--button text-left ">Type : {{$contract->type}}</div>
			<div class="mdc-typography--button text-left ">Amount : {{$contract->contractAmount.' ¥'}}</div>
			<div class="mdc-typography--button text-left ">Comment : {{$contract->comment}}</div>
			<p class="text-justify "></p>



		</div>
	</div>
	<hr>
	<div class="row justify-content-center "  >
		<div class="col-md-12">
			<h1 class="mdc-typography--headline4 font-weight-bold text-left pt-2">Contact infos</h1>




		</div>
	</div>
	<div class="row justify-content-center pt-2"  >
		<div class="col-md-6">

			<div class="mdc-typography--button text-left ">Name : <span class="mdc-typography--body1">{{$contract->Contact->name}}</span></div>
			<div class="mdc-typography--button text-left ">Fonction : <span class="mdc-typography--body1">{{$contract->Contact->fonction}}</span></div>
			<div class="mdc-typography--button text-left ">Phone number :  <span class="mdc-typography--body1">{{$contract->Contact->phone_number}}</span></div>





		</div>
		<div class="col-md-6 ">

			<div class="mdc-typography--button text-left "> Adress :<span class="mdc-typography--body1">{{$contract->Contact->Adress->number}} {{$contract->Contact->Adress->name}}, {{$contract->Contact->Adress->zip_code}} {{$contract->Contact->Adress->city}} {{$contract->Contact->Adress->country}}</span></div>
			<div class="mdc-typography--button text-left ">Bank :<span class="mdc-typography--body1">{{$contract->Contact->Bank->account_name}}</span></div>






		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-12 "  >

			<div class="mdc-menu-surface--anchor float-right">
				<button id="actionsButton" class="mdc-fab  my-fab" aria-label="Favorite"  data-toggle="modal" data-target="#infosModal"  >
					<span class="mdc-fab__icon material-icons">edit</span>
				</button>
				<div class="mdc-menu mdc-menu-surface mdc-menu-surface--anchor" id="actions" style="position:absolute">
					<ul class="mdc-list" role="menu"  aria-hidden="true" aria-orientation="vertical" tabindex="-1">
						<form action="{{ route('invoice.addInvoice')}}" method="get" style="margin-bottom:0px;">
							@method('GET')
							<input type="hidden" name="id" value="{{$contract->id}}">
							<button  class="text-decoration-none text-dark" >
								<li class="mdc-list-item" role="menuitem">
									<span class="mr-2">		<i class="material-icons mdc-button__icon">file_copy</i></span>
									New&nbsp;invoice
								</li>
							</button>
						</form>
						@if($contract->generationDate)
						<a href="{{ route('contract.pdf',[ 'user'=> Auth::id(), 'contract_id'=> $contract->id ]) }}" class="text-decoration-none text-dark" >
							<li class="mdc-list-item" role="menuitem">
								<span class="mr-2">	<i class="material-icons mdc-button__icon">insert_drive_file</i></span>
								Pdf
							</li>
						</a>
						<a href="{{ route('contract.generation',[ 'user'=> Auth::id(), 'contract_id'=> $contract->id ]) }}" class="text-decoration-none text-dark" >
							<li class="mdc-list-item" role="menuitem">
								<span class="mr-2">		<i class="material-icons mdc-button__icon">edit</i></span>
								Edit
							</li>
						</a>
						@else
						<a href="{{ route('contract.generation',[ 'user'=> Auth::id(), 'contract_id'=> $contract->id ]) }}" class="text-decoration-none text-dark " >
							<li class="mdc-list-item" role="menuitem">
									<span class="mr-2">		<i class="material-icons mdc-button__icon">insert_drive_file</i></span>
								Create PDF
							</li>
						</a>
						@endif
	<li class="mdc-list-item" role="menuitem">
		<i class="material-icons mdc-button__icon">	remove_circle</i>
						<form action="{{ route('contract.destroy')}}" method="get" style="margin-bottom:0px;" >
							<input name="contract_id" type="hidden" value="{{$contract->id}}"/>
							<button type="submit" class="pl-2">


Delete

							</a>
						</form>
	</li>
					</ul>
				</div>
			</div>
			<form action="{{ route('contract.generation',[ 'user'=> Auth::id(), 'contract_id'=> $contract->id ]) }}" style="    margin-block-end: 0em!important;">

			</form>
		</div>
	</div>

</div>



@foreach($contract->Invoice as $invoice)

<div class="col-lg-12 text-center">



</div>

<div class="container home-card bg-white px-5 py-5 mb-5" >


	<div class="row justify-content-center "  >
		<div class="col-md-12">

			<h1 class="mdc-typography--headline4 font-weight-bold text-left pb-2">My invoice n° {{$loop->iteration}}</h1>



			<div class="mdc-typography--button text-left "> Invoice of the : {{$invoice->created_at->modify('+8 hours')}}</div>
			<div class="mdc-typography--button text-left "> for at total of {{$invoice->finalAmount.' ¥'}} </div>



			<div class="dropdown">

				<button id="invoice{{$loop->iteration}}" class="mdc-fab  my-fab float-right" aria-label="Favorite"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >
					<span class="mdc-fab__icon material-icons">edit</span>
				</button>
				<div class="dropdown-menu" aria-labelledby="invoice{{$loop->iteration}}">
					@if($invoice->invoiceDate)
					<a class="mdc-list-item" class="mdc-list-item " href="{{ route('invoice.pdf',[ 'user'=> Auth::id(), 'contract_id'=> $contract->id, '$invoice_id'=> $invoice->id ]) }}" >	<span class="mr-2">	<i class="material-icons mdc-button__icon">insert_drive_file</i></span>PDF</a>
					@endif

					<a class="mdc-list-item" href="#">	<span class="mr-2">		<i class="material-icons mdc-button__icon">close</i></span>Delete</a>
					<a class="mdc-list-item" href="{{ route('invoice.showInvoice',[ 'user'=> Auth::id(), 'contract_id'=> $contract->id, '$invoice_id'=> $invoice->id ]) }}">	<span class="mr-2">		<i class="material-icons mdc-button__icon">edit</i></span>
						Edit</a>
					</div>
				</div>
			</div>

		</div>
	</div>
	@endforeach

</main>
@endsection
