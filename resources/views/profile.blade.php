
@extends('layouts.app')

<script src="{{ asset('js/profile.js') }}" defer></script>

@section('content')


<div class="container-fluid bg-white">
	<div class="row bg-primary py-5">
		<div class="col-12">
			<h1 class="mdc-typography--headline4 text-center text-capitalize font-weight-bold  text-white">{{ \Auth::user()->name }}</h1>
		</div>
		<div class="col-12">
			<div class=" mdc-typography--button  text-center text-white">

				{{ \Auth::user()->email }}
			</div>
		</div>
	</div>
	<div>
		<main class="bg-white container py-5"  >

			<div class="row ">
				<div class="col-md-6 col-sm-12 px-4 ">
					<div class=" mt-1 mb-3 text-left "  >
						<div class=" mdc-typography--button ">
							Me
						</div>
					</div>
					<div class=" container home-card bg-white py-5 px-5 mb-4" >
						<div class=" row pb-3">
							<div class="col-md-6 col-sm-12 mdc-typography--body1">
								<div class=" row">
									<i class="material-icons px-3">
										cake
									</i>


									<p class="my-auto text-left">
										{{  \Auth::user()->birth_date }}
									</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 pl-5 font-weight-normal mdc-typography--body1">
								<div class=" row d-flex justify-content-start">
									<i class="material-icons px-3">
										phone
									</i>


									<p class="my-auto" >
										{{  \Auth::user()->phone_number }}
									</p>
								</div>
							</div>

						</div>
						<div class=" row">
							<div class="col-md-6 col-sm-12 mdc-typography--body1">
								<div class=" row ">
									<i class="material-icons px-3">
										flag
									</i>


									<p class="my-auto text-left">
										{{ \Auth::user()->nationality }}
									</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 pl-5 font-weight-normal mdc-typography--body1">
								<div class=" row d-flex justify-content-start">
									<img src="{{URL::asset('img/wechatIcon.png')}}" width="70" class="px-3">


									<p class="my-auto">
										{{  \Auth::user()->wechat_id }}
									</p>
								</div>
							</div>

						</div>

					</div>
					<div class="row justfy-content-end">
						<div class="col" align=right>
							<button class="mdc-fab mr-5 my-fab" aria-label="Favorite"  data-toggle="modal" data-target="#infosModal" style="margin-top:-55px;">
								<span class="mdc-fab__icon material-icons">edit</span>
							</button>
						</div>
					</div>
					<div class=" mt-1 mb-3 text-left "  >
						<div class=" mdc-typography--button ">
							My skills
						</div>
					</div>
					<div class="container home-card bg-white py-5 px-5 "  >
						@forelse ($hardSkills as $skill)
						@if ($loop->last)
						<p class="my-auto text-left pb-1">	{{ $skill->name }}</p>

							@break
						@endif
						@if ($loop->first)
						<p class="my-auto text-left pb-1">	{{ $skill->name }}</p>
						<hr>
						@else


						<p class="my-auto text-left py-1f">	{{ $skill->name }}</p>
						<hr>
						@endif

						@empty
						<p>No skill yet</p>
						@endforelse

					</div>
					<div class="row justfy-content-end">
						<div class="col" align=right>
							<button class="mdc-fab mr-5 my-fab" aria-label="Favorite"  data-toggle="modal" data-target="#skillsModal" style="margin-top:-30px;">
								<span class="mdc-fab__icon material-icons">add</span>
							</button>
						</div>
					</div>

				</div>
				<div class="col-md-6 col-sm-12 px-4">
					<div class=" mt-1 mb-3 text-left "  >

						<span class=" mdc-typography--button ">
							My Contracts
						</span>
					</div>


					@forelse ($contracts->reverse()  as $contract)
					@if($loop->iteration==3)
					@break
					@endif
					<a href="{{ route('contract.show',[ 'user'=> Auth::id(), 'contract_id'=> $contract->id ]) }}" class=" text-dark text-decoration-none py-5"  >
						<div class="mb-5 home-card bg-white   "  >

							<div class="d-flex flex-row-reverse bd-highlight position-relative" style="margin-top:-20px;margin-right:40px;">

								<div class=" bd-highlight" >	<p  class="my-auto text-right py-2 mdc-typography--subtitle1 font-weight-bold text-white bg-primary px-3" style="border-radius:4px"> {{$contract->contractState}}</p></div>
							</div>


							<div class=" px-5 py-5">
								<div class="row " >
									<div class="col  font-weight-normal ">
										<div align="left mdc-typography--button1">type</div>
									</div>
									<div class="col  font-weight-normal ">
										<div  align="right" class="font-weight-bold">{{$contract->type}}</div>
									</div>
								</div>
								<hr>
								<div class="row ">
									<div class="col  font-weight-normal mdc-typography--body1">
										<div align="left">Amount</div>
									</div>
									<div class="col  font-weight-normal ">
										<div  align="right" class="font-weight-bold">{{$contract->contractAmount}}</div>
									</div>
								</div>
								<hr>
								<div class="row ">
									<div class="col  font-weight-normal mdc-typography--body1">
										<div align="left">startingDate</div>
									</div>
									<div class="col  font-weight-normal ">
										<div  align="right" class="font-weight-bold">{{$contract->startingDate}}</div>
									</div>
								</div>
								<hr>
								<div class="row ">
									<div class="col  font-weight-normal mdc-typography--body1">
										<div align="left">endingDate</div>
									</div>
									<div class="col  font-weight-normal ">
										<div  align="right" class="font-weight-bold">{{$contract->endingDate}}</div>
									</div>
								</div>
								<hr>
								<div class="row ">
									<div class="col  font-weight-normal mdc-typography--body1">
										<div align="left">Client</div>
									</div>
									<div class="col  font-weight-normal ">
										<div  align="right" class="font-weight-bold">{{$contract->Contact->name}}</div>
									</div>
								</div>
								<hr>
								<div class="row ">
									<div class="col  font-weight-normal mdc-typography--body1">
										<div align="left">comment</div>
									</div>
									<div class="col  font-weight-normal ">
										<div  align="right" class="font-weight-bold">{{$contract->comment}}</div>
									</div>
								</div>






							</div>

						</div>



					</a>
					@empty
					<div class="container home-card bg-white py-5 px-5 " >

						<div class="mdc-typography--body1">no contracts</div>


					</div>
					@endforelse
					<div class="row justfy-content-end">
						<div class="col" align=right>
							<button class="mdc-fab mr-5 my-fab" aria-label="Favorite"  data-toggle="modal" data-target="#ContractModal" style="margin-top:-30px;">
								<span class="mdc-fab__icon material-icons">add</span>
							</button>
						</div>
					</div>
					<button class="mdc-button"  type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						<span class="mdc-button__label">more</span>
						<i class="material-icons mdc-button__icon" aria-hidden="true">expand_more</i>
					</button>
					<div  class="collapse pt-5" id="collapseExample" >

						@forelse ($contracts as $contract)
						@if($loop->iteration>2)



						<a href="{{ route('contract.show',[ 'user'=> Auth::id(), 'contract_id'=> $contract->id ]) }}" class=" text-dark text-decoration-none py-5"  >
							<div class="mb-5 home-card bg-white   "  >

								<div class="d-flex flex-row-reverse bd-highlight position-relative" style="margin-top:-20px;margin-right:40px;">

									<div class=" bd-highlight" >	<p  class="my-auto text-right py-2 mdc-typography--subtitle1 font-weight-bold text-white bg-primary px-3" style="border-radius:4px"> {{$contract->contractState}}</p></div>
								</div>


								<div class=" px-5 py-5">
									<div class="row " >
										<div class="col  font-weight-normal ">
											<div align="left mdc-typography--button1">type</div>
										</div>
										<div class="col  font-weight-normal ">
											<div  align="right" class="font-weight-bold">{{$contract->type}}</div>
										</div>
									</div>
									<hr>
									<div class="row ">
										<div class="col  font-weight-normal mdc-typography--body1">
											<div align="left">Amount</div>
										</div>
										<div class="col  font-weight-normal ">
											<div  align="right" class="font-weight-bold">{{$contract->contractAmount}}</div>
										</div>
									</div>
									<hr>
									<div class="row ">
										<div class="col  font-weight-normal mdc-typography--body1">
											<div align="left">startingDate</div>
										</div>
										<div class="col  font-weight-normal ">
											<div  align="right" class="font-weight-bold">{{$contract->startingDate}}</div>
										</div>
									</div>
									<hr>
									<div class="row ">
										<div class="col  font-weight-normal mdc-typography--body1">
											<div align="left">endingDate</div>
										</div>
										<div class="col  font-weight-normal ">
											<div  align="right" class="font-weight-bold">{{$contract->endingDate}}</div>
										</div>
									</div>
									<hr>
									<div class="row ">
										<div class="col  font-weight-normal mdc-typography--body1">
											<div align="left">Client</div>
										</div>
										<div class="col  font-weight-normal ">
											<div  align="right" class="font-weight-bold">{{$contract->Contact->name}}</div>
										</div>
									</div>
									<hr>
									<div class="row ">
										<div class="col  font-weight-normal mdc-typography--body1">
											<div align="left">comment</div>
										</div>
										<div class="col  font-weight-normal ">
											<div  align="right" class="font-weight-bold">{{$contract->comment}}</div>
										</div>
									</div>






								</div>

							</div>



						</a>
						@endif
						@empty
						<div class="container home-card bg-white py-5 px-5 "  >

							<div class="mdc-typography--body1">no contracts</div>


						</div>

						@endforelse
					</div>



				</div>

			</div>

		</main>

		<!-- Modal contract -->
		<div class="modal fade " id="ContractModal" tabindex="-100" role="dialog" aria-labelledby="contractModal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg " role="document">
				<div class="modal-content home-card">
					<div class="modal-header" style="border:none;">
						<h5 class="modal-title mdc-typography--button" id="ContractModalLabel">add a new contract</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" >

						<form id="contractForm" action="{{ route('contract.add')}}" method="POST" name="contract" >
							@csrf
							@method('PUT')
							<div id="contactIdInput" ></div>
							<div class="row mb-4">

								<div class="col" >
									<div class="toolbar mdc-menu-surface--anchor">
										<div class="mdc-text-field mdc-text-field--outlined contactTextField  ">
											<input type="text" id="contact" class="mdc-text-field__input" autocomplete="off">

											<div class="mdc-notched-outline">
												<div class="mdc-notched-outline__leading"></div>
												<div class="mdc-notched-outline__notch">
													<label for="tf-outlined" class="mdc-floating-label">Add an existing contact</label>
												</div>
												<div class="mdc-notched-outline__trailing"></div>
											</div>
										</div>

										<div class="mdc-menu mdc-menu-surface mdcContactsList" style="margin-top:60px;">
											<ul class="mdc-list" role="menu" id="contact_list" aria-hidden="true" aria-orientation="vertical" tabindex="-1">


											</ul>
										</div>
									</div>
								</div>

							</div>
							<div class="row ">

								<div class="col-md-3 col-sm-12" align=center>

									<div class="row justfy-content-center" >
										<div class="col-12 mb-3" >
											<div class="mdc-typography--button" class="font-weight-light ">Contact info </div>
										</div>
									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div  id="contactName" class="mdc-text-field mdc-text-field--outlined">
												<input  class="mdc-text-field__input form-control"  name="contactName" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label">ContactName</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>


												</div>
											</div>
										</div>
									</div>

									<div class="row mb-4">
										<div class="col" align=center>
											<div id="contactFonction"  class="mdc-text-field mdc-text-field--outlined">
												<input  class="mdc-text-field__input form-control"  name="fonction" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label">Fonction</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>
									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div class="mdc-select mdc-select--outlined" id=phone style=" width: 150px;" >
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
													</div>
													<div class="mdc-notched-outline__trailing"></div>
												</div>
												<input type="hidden" name="phone" value=86 style=" width: 150px;">
												<i class="mdc-select__dropdown-icon"></i>
												<div class="mdc-select__selected-text" ></div>
												<div class="mdc-select__menu mdc-menu mdc-menu-surface " style="z-index:10000" >
													@include('layouts.phone')
												</div>
											</div>
										</div>
									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div  id="phone_number" class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="phoneNumber" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label">Phone number</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>

									</div>


								</div>
								<div class="col-md-3 col-sm-12" align=center>
									<div class="row justfy-content-center" >
										<div class="col-12 mb-3" >
											<div class="mdc-typography--button" class="font-weight-light ">Contact adress </div>
										</div>
									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div  id="adressName" class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="name" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label">Adress name</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>

									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div id="adressNumber"  class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="number" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label">Adress number</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>

									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div id="adressCity"  class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="city" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label"> City</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>

									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div id="adressCountry"  class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="country" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label"> Country</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>

									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div  id="adressZip" class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="zip_code" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label"> Zip code</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="col-md-3 col-sm-12" align=center>
									<div class="row justfy-content-center" >
										<div class="col-12 mb-3" >
											<div class="mdc-typography--button" class="font-weight-light ">Contact's comany infos </div>
										</div>
									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div  id="englishName" class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="english_name" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label"> English name</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>

									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div  id="chineseName" class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="chinese_name" >
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label"> Chinese name</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>


									</div>

									<div class="row mb-4">
										<div class="col" align=center>
											<div  id="companyCountry" class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="company_country" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label"> company country</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>


									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div  id="companyPhone" class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="company_phone" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label"> Company phone</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>


									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div  id="taxNumber" class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="tax_number" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label">Tax number</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>


									</div>
								</div>
								<div class="col-md-3 col-sm-12" align=center>
									<div class="row justfy-content-center" >
										<div class="col-12 mb-3" >
											<div class="mdc-typography--button" class="font-weight-light ">Contact bank infos </div>
										</div>
									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div id="contactBankAccount" class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="account_name" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label">Bank name</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>

									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div id="contactBankAccountNumber"  class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="account_number" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label">Bank account number</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>

									</div>

									<div class="row mb-4 justfy-content-start">
										<div class="col" align=center>
											<div id="contactBankBranch"  class="mdc-text-field mdc-text-field--outlined  mdc-text-field--disabled">
												<input class="mdc-text-field__input form-control"  name="bank_branch" required>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label">Bank branch</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>
									</div>



								</div>
							</div>
							<div class="row justify-content-start">
								<div class="col-md-3 col-sm-12">
									<div class="row" >
										<div class="col-12 mb-3" >
											<div class="mdc-typography--button" class="font-weight-light ">Contract infos </div>
										</div>
									</div>
									<div class="row">


										<input   class="mdc-text-field__input form-control"  name="state" value="DRAFT" type="hidden" >

									</div>
									<div class="row mb-4">
										<div class="col" align=center>
											<div class="mdc-select mdc-select--outlined container-fluid" id=contractType >
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">

													</div>
													<div class="mdc-notched-outline__trailing"></div>
												</div>
												<input type="hidden" name="type" value="package">
												<i class="mdc-select__dropdown-icon"></i>
												<div class="mdc-select__selected-text" >Package</div>
												<div class="mdc-select__menu mdc-menu mdc-menu-surface " style="z-index:10000" >
													<ul class="mdc-list">

														<li class="mdc-list-item" data-value="package" >
															Package
														</li>
														<li class="mdc-list-item" data-value="perTime">
															per Time
														</li>

													</ul>
												</div>


											</div>
										</div>
									</div>



									<div class="row mb-4">
										<div class="col" align=center>
											<div class="mdc-text-field mdc-text-field--outlined">
												<input   class="mdc-text-field__input form-control"  name="comment" >
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label">Comment</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>



							<div class="col-12" align=center>
								<button  type=submit class="shadow-none mdc-button mdc-button--unelevated  mdc-button--outlined my-custom-button" >
									<span class="mdc-button__label ">Create a new contract</span>
								</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>



		<div class="modal fade " id="skillsModal" tabindex="-1" role="dialog" aria-labelledby="skillsModal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered " role="document">
				<div class="modal-content my-img">
					<div class="modal-header mdc-typography--button" style="border:none;">
						<div class="col-12 pt-2" >
							add skills
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<i class="material-icons mdc-button__icon">close</i>
							</button>
						</div>
					</div>

					<div class="modal-body" >
						<div class="container" >
							<div class="row justfy-content-center" >
								<div class="col-6 " align=left>
									<form class=" py-auto">

										<div class="toolbar mdc-menu-surface--anchor">
											<div class="mdc-text-field mdc-text-field--outlined skillTextField  mdc-text-field--with-trailing-icon">
												<input type="text" id="skill" class="mdc-text-field__input" autocomplete="off">
												<i class="material-icons mdc-text-field__icon" id="addChips" tabindex="0" role="button">add_circle</i>
												<div class="mdc-notched-outline">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label for="tf-outlined" class="mdc-floating-label">Add a skill</label>
													</div>
													<div class="mdc-notched-outline__trailing"></div>
												</div>
											</div>

											<div class="mdc-menu mdc-menu-surface mdcSkillsList" style="margin-top:60px">
												<ul class="mdc-list" role="menu" id="skill_list" aria-hidden="true" aria-orientation="vertical" tabindex="-1">

												</ul>
											</div>
										</div>


									</form>

								</div>
								<div class="col-6 my-2" align=left>
									<button type=submit class="shadow-none mdc-button mdc-button--unelevated  mdc-button--outlined my-custom-button"  id="validate" >
										<span class="mdc-button__label ">add</span>
									</button>

								</div>
							</div>
							<form action="{{route('skills.add')}}" method="GET" name="addSkills" id="chips">

							</form>
							<hr>
							<div class="row justfy-content-center" >
								<div class="col-12 mb-3" >
									<div class="mdc-typography--button" class="font-weight-light ">Delete a skill </div>
								</div>
							</div>
							<div class="row mx-1 justfy-content-start" >

								@forelse ($hardSkills as $skill)

								<form action="{{ route('skill.destroy')}}" method="post" type=hidden name="form{{$skill->id}}">
									@csrf
									@method('DELETE')
									<input name="skill_id" value="{{$skill->id}}" type="hidden"/>


									<div class="mdc-chip mr-2 " onClick="document.forms['form{{$skill->id}}'].submit();">
										<i class="material-icons mdc-chip__icon mdc-chip__icon--leading">remove_circle</i>
										<div class="mdc-chip__text">	{{ $skill->name }}</div>
									</div>

								</form>
								@empty
								<p>No hard skills yet</p>

								@endforelse

							</div>



						</div>


					</div>




				</div>
			</div>
		</div>
		<div class="modal fade " id="infosModal" tabindex="-1" role="dialog" aria-labelledby="skillsModal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered " role="document">
				<div class="modal-content my-img">
					<div class="modal-header pb-0" style="border:none;">
							<div class="col-12 pt-2 mdc-typography--button" >
						Edit my profile
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="material-icons mdc-button__icon">close</i>
						</button>
							</div>
					</div>

					<div class="modal-body" >
						<div class="container" >
							<div class="row justfy-content-center" >
								<div class="col-12" align=left>


									<form action="{{ route('profile.edit')}}" method="post" name="wechat">
										@csrf
										@method('PUT')



										<div class="mdc-text-field mdc-text-field--outlined  mdc-text-field--with-trailing-icon">
											<input type="text"  name="wechat" class="mdc-text-field__input" autocomplete="off" required>
											<button class="material-icons mdc-text-field__icon"  tabindex="0"  type="submit" >edit</button>
											<div class="mdc-notched-outline">
												<div class="mdc-notched-outline__leading"></div>
												<div class="mdc-notched-outline__notch">
													<label for="tf-outlined" class="mdc-floating-label">Wechat id</label>
												</div>
												<div class="mdc-notched-outline__trailing"></div>
											</div>
										</div>


									</form>



								</div>

							</div>
							<hr>

							<form action="{{ route('profile.edit')}}" method="post" class="row ">
								@csrf
								@method('PUT')
								<div class="col-md-6 col-sm-12 pt-3" align="left">
									<div class="mdc-select mdc-select--outlined " id=phone >
										<div class="mdc-notched-outline">
											<div class="mdc-notched-outline__leading"></div>
											<div class="mdc-notched-outline__notch">

											</div>
											<div class="mdc-notched-outline__trailing"></div>
										</div>
										<input type="hidden" name="phone" value=86>
										<i class="mdc-select__dropdown-icon"></i>
										<div class="mdc-select__selected-text" ></div>
										<div class="mdc-select__menu mdc-menu mdc-menu-surface " style="z-index:10000" >
											@include('layouts.phone')
										</div>


									</div>
								</div>
								<div class="col-md-6 col-sm-12 pt-3" align=left>




									<div class="mdc-text-field mdc-text-field--outlined  mdc-text-field--with-trailing-icon">
										<input type="number"  name="number" class="mdc-text-field__input" autocomplete="off" required>
										<button class="material-icons mdc-text-field__icon"  tabindex="0"  type="submit" >edit</button>
										<div class="mdc-notched-outline">
											<div class="mdc-notched-outline__leading"></div>
											<div class="mdc-notched-outline__notch">
												<label for="tf-outlined" class="mdc-floating-label">phone Number</label>
											</div>
											<div class="mdc-notched-outline__trailing"></div>
										</div>
									</div>





								</div>

							</form>
							<div class="modal-footer" style="border:none;">

							</div>

						</div>


					</div>




				</div>
			</div>
		</div>
	</div>
</div>
<div class="mdc-snackbar"  style="    z-index: 1000000000;">
	<div class="mdc-snackbar__surface">
		<div class="mdc-snackbar__label"
		role="status"
		aria-live="polite">

	</div>
	<div class="mdc-snackbar__actions">
		<button type="button" class="mdc-button mdc-snackbar__action">ok</button>
	</div>
</div>
</div>
@if($errors->any())
<div class="mdc-snackbar mdc-snackbar-skill"  style="    z-index: 1000000000;">
	<div class="mdc-snackbar__surface">
		<div class="mdc-snackbar__label"
		role="status"
		aria-live="polite">
		{{$errors->first()}}
	</div>

	<div class="mdc-snackbar__actions">
		<button type="button" class="mdc-button mdc-snackbar__action">ok</button>
	</div>
</div>
</div>

@endif
<script type="text/javascript">
// jQuery wait till the page is fullt loaded
$(document).ready(function () {
	// keyup function looks at the keys typed on the search box
	$('#skill').on('keyup',function() {
		// the text typed in the input field is assigned to a variable
		var query = $(this).val();
		// call to an ajax function
		$.ajax({
			// assign a controller function to perform search action - route name is search
			url:"{{ route('skills.fetch') }}",
			// since we are getting data methos is assigned as GET
			type:"GET",
			// data are sent the server
			data:{'skill':query},
			// if search is succcessfully done, this callback function is called
			success:function (data) {
				// print the search results in the div called skill_list(id)
				$('#skill_list').html(data);
			}
		})
		// end of ajax call
	});

	// initiate a click function on each search result
	$(document).on('click', '#skill_list li', function(){
		// declare the value in the input field to a variable
		var value = $(this).text();
		// assign the value to the search box
		$('#skill').val(value);
		// after click is done, search results segment is made empty
		$('#skill_list').html("");
	});
});
</script>


<script type="text/javascript">
// jQuery wait till the page is fullt loaded
$(document).ready(function () {
	// keyup function looks at the keys typed on the search box
	$('#contact').on('keyup',function() {
		// the text typed in the input field is assigned to a variable
		var query = $(this).val();
		// call to an ajax function
		$.ajax({
			// assign a controller function to perform search action - route name is search
			url:"{{ route('contacts.fetch') }}",
			// since we are getting data methos is assigned as GET
			type:"GET",
			// data are sent the server
			data:{'contact':query},
			// if search is succcessfully done, this callback function is called
			success:function (data) {
				// print the search results in the div called skill_list(id)

				$('#contact_list').html(data);
			}
		})
		// end of ajax call
	});

	// initiate a click function on each search result
	$(document).on('click', '#contact_list li', function(){

		// declare the value in the input field to a variable
		var value = $(this).text();

		// assign the value to the search box
		$('#contact').val(value.split(' ')[0]);
		// after click is done, search results segment is made empty

		$('#contact_list').html("");
		$('#contactIdInput').html('	<input name="contactId" id=contactId type="hidden" value="'+value.split(' ')[4]+'" >');

	});
});
</script>

@endsection
