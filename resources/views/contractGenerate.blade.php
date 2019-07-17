@extends('layouts.app')
@section('content')
<style >
p{
	font-family: AvenirNextCondensed-Regular !important;
}
</style>
  <div class="container">
    <div class="row">
      <div class="col">
    <form action="{{ route('contract.save',[ 'user'=> Auth::id(), 'contract_id'=> $contract->id ])}}" method="post" name="contractpdf">
    @csrf
    @method('PUT')
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong>SERVICES AGREEMENT</strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong>BY AND BETWEEN</strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong style="text-transform:uppercase">{{$contract->Contact->Company->english_name}}</strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong>AND</strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong>TAI2</strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;">Contract generation date : <input  class="border border-warning rounded" type="input" value="{{date("Y/m/d")}}" name="generationDate" required></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>                          <!-- end of the first page -->
<div>
    <p align="center">
        <strong></strong>
    </p>
    <p align="center">
        <strong>SERVICES AGREEMENT</strong>
    </p>
</div>
<p>
    This services agreement (the “<strong>Agreemen</strong>t”) is made and
    entered into as of <input   class="border border-warning rounded" type="date" placeholder="contract starting date" value="{{$contract->startingDate}}" name="startingDate" required>, by and between the following
    two Parties:
</p>
<p>
    <strong>1. </strong>
    <strong>Tai2</strong>
    , a Wholly Foreign Owned<em> </em>Enterprise under Chinese law having its
    registered office at <strong>F3097,Building 1, No.5500,Yuanjiang Rd, Minhang District, Shanghai</strong>
, with a registered capital of <strong>1.2 million</strong>, registered in <strong>Shanghai Qizhong Econonic Zone</strong> under the number <strong>91310000MA1GCG2K9R</strong> represented by <strong>GIROUX GREGOIRE ARTHUR MARIE HUBERT</strong>,
</p>
<p align="right">
    (Hereinafter referred to as the "<strong>Services Provider</strong>");
</p>
<p align="right">
    <strong>ON THE FIRST HAND</strong>
</p>
<p>
    <strong>AND</strong>
</p>
<p>
    <strong>2. </strong>
    <strong>{{$contract->Contact->Company->english_name}}, </strong>
having its registered office at <input class="border border-warning rounded" type="text" name="adress" size="90" value="{{$contract->Contact->Adress->number}} {{$contract->Contact->Adress->name}}, {{$contract->Contact->Adress->zip_code}} {{$contract->Contact->Adress->city}}, {{$contract->Contact->Adress->country}}"required> , with a registered capital of <input class="border border-warning rounded" type="text" name="capital_number" value="{{$contract->Contact->Company->capital_number}}" placeholder="capital number" required>, registered in <input type="text" class="border border-warning rounded" name="registration_area" value="{{$contract->Contact->Company->registration_area}}" placeholder="registration area" required> under the number <input type="text" class="border border-warning rounded" name="registration_number" value="{{$contract->Contact->Company->registration_number}}" placeholder=" registration number" required> represented by <input type="text" class="border border-warning rounded" name="contactname" value="{{$contract->Contact->name}}" placeholder="contact name" equired>,
</p>
<p align="right">
    (Hereinafter referred to as the "<strong>Beneficiary</strong>");
</p>
<p align="right">
    <strong>ON THE OTHER HAND</strong>
</p>
<p>
    The Services Provider and the Beneficiary are collectively hereinafter
    referred to as the "<strong>Parties</strong>" and each of them individually
    as a "<strong>Party</strong>".
</p>
<p>
    <strong><u>WHEREAS </u></strong>
</p>
<p>
    <strong></strong>
</p>
<p>
<strong>(A) </strong>
    The Beneficiary intends to benefit from the Services (as defined below) of
    the Services Provider.
</p>
<p>
<strong>(B) </strong>
    The Services Provider is an innovative company having a consultancy
    activity to the benefit of corporate clients.
</p>
<p>
<strong>(B) </strong>
    The Services Provider has a relevant experience in assisting companies in
    the course of their business in Asia.
</p>
<p>
    <strong>(D) </strong>

      In this context, the Parties have decided to establish the present
      Agreement in order to define the terms and conditions under which the
      Services shall be provided by the Services Provider.
</p>
<p>
    <strong></strong>
</p>
<strong>
    <br clear="all"/>
</strong>
<p>
    <strong></strong>
</p>
<p>
    <strong>NOW, THEREFORE, the Parties agree as follows:</strong>
</p>
<p>
    <strong></strong>
</p>
<p>
    <strong></strong>
</p>
<p>
    <strong>ARTICLE 1 </strong>
    <strong>OBLIGATIONS AND DUTIES OF THE SERVICES PROVIDER</strong>
</p>
<p>
    <strong></strong>
</p>
<p>
    <strong>1.1. </strong>
    <strong><u>Description of the Services</u></strong>
</p>
<p>
    The Services Provider shall perform or cause to be performed, for the
    benefit of the Beneficiary, the following specific services and such other
    support Services as shall be reasonably requested from time to time by the
    Beneficiary (the “<strong>Services</strong>”):
</p>
<p>                                            <!--sous forme de liste, insérer les services prévus dans le tableau pour chaque type de conseil -->
<textarea name="missionDetails" class="form-control border border-warning" rows="9" required>
@if($contract->missionType=="DesignCreative")
-	Creation of a visual identity;
-	Creation of the graphic design for the Beneficiary’s products/services;
-	Creation of a logo;
-	Creation of brand headlines;
-	Creation of messaging and offerings;
-	Creation of typography;
-	Packaging design;
-	Creation of advertisement concepts;
-	Design of shops;
-	Design of online shops;
-	Conception of special events;
@endif
@if($contract->missionType=="SalesMarketing")
-	Conducting of a satisfaction surveys;
-	Conducting of market research studies;
-	Elaboration of a benchmark;
-	Analysis of the customers’ behavior;
-	Elaboration of a fidelity program;
-	Development of the offer of services of the Beneficiary to its customers;
-	Review of the Beneficiary’s pricing policy ,
-	Advices on the pricing policy;
-	Advices on the sale strategy;
-	Advices on the incentive policy toward the sales representatives.
-	Advices on the sales channels;
@endif
@if($contract->missionType=="BusinessDevelopment")
-	Drafting of a business plan;
-	Personal coaching;
-	Advices on the improvement of the company;
@endif
@if($contract->missionType=="FinanceAccounting")
-	Conducting of a financial audit;
-	Bookkeeping of the Beneficiary’s accountability;
-	Valuation of a company;
-	Valuation of assets;
-	Consulting mission linked to a M&A operation;
@endif
@if($contract->missionType=="Translation")
-	Translation of a website;
-	Translation of internal documents;
-	Translation of administrative documents;
-	Mission of translation during an event;
-	Acting as the personal translator of {{$contract->Company->name}};
@endif
@if($contract->missionType=="AdminSupport")
-	Writing of mails and e-mails;
-	Management of the sending of mails and parcels;
-	Filing and classification of the documents;
-	Planning management of {{$contract->Contact->name}};
-	Management of administrative procedures with public authorities;
-	Basic accountability tasks;
@endif
@if($contract->missionType=="ITNetworking")
-	Creation, development and implementation of website, WeChat account or any other digital services;
-	Core, modules & plugins upgrades;
-	Debugging;
-	Security improvement at the code level;
-	Programming: modification of the source code;
-	Implementation of new functionalities on demand;
-	Daily maintenance of the networks and websites of the Beneficiary;
-	Social media services;
@endif
@if($contract->missionType=="DataScienceAnalytics")
-	Analysis of the Data provided by the Beneficiary;
-	Data lake management;
@endif
@if($contract->missionType=="WebMobileSoftwareDev")
-	Creation of a mobile application;
-	Creation of a software;
-	Maintenance and upgrades of the software and applications made by the Services Provider;
-	Implementation of new functionalities on demand;
@endif
@if($contract->missionType=="Copywriting")
-	Writing of website contents;
-	Writing of blog contents;
-	Writing of articles;
-	Writing of annual reports;
@endif
</textarea>                                            <!-- end of the mission type -->
</p>
<p>
    In addition to the Services defined under this Section 1.1, the Services
    Provider shall provide any further Services which are necessary to the
    activity of the Beneficiary and which may be requested by the Beneficiary.
</p>
<p>
    <strong>1.2. </strong>
    <strong><u>Independence and confidentiality</u></strong>
</p>
<p>
    The Services Provider shall provide the Services as an independent entity
    and not as the Beneficiary's representative.
</p>
<p>
    The Services Provider shall not be entitled to represent or act on behalf
    of the Beneficiary unless expressly agreed in writing between the Parties
    for a specific task or action.
</p>
<p>
    The Services Provider hereby undertakes to handle the matters related to
    the Beneficiary independently from its own matters and to keep confidential
    any information received in connection with or related to the Services
    provided to the Beneficiary.
</p>
<p>
    The confidentiality obligations of the Services Provider shall survive to
    the expiration or termination of this Agreement.
</p>
<p>
    Upon the expiration or termination of this Agreement for any reason
    whatsoever, the Services Provider shall return to the Beneficiary all of
    the confidential documentation or any other materials received in
    connection with or related to the Services provided to the Beneficiary.
</p>
<p>
    <strong>1.3. </strong>
    <strong><u>Instruction and duty of care</u></strong>
</p>
<p>
    <strong></strong>
</p>
<p>
    The Services Provider hereby undertakes to comply and to act in accordance
    with the requests and instructions given by the Beneficiary unless such
    requests or instructions are unlawful.
</p>
<p>
    In the absence of specific instructions given by the Beneficiary, the
    Services Provider shall provide the Services with all care and loyalty as
    required by the circumstances.
</p>
<p>
    <strong>ARTICLE 2 </strong>
    <strong>OBLIGATIONS AND DUTIES OF THE BENEFICIARY</strong>
</p>
<p>
    <strong>2.1. </strong>
    <strong><u>Instruction duty</u></strong>
</p>
<p>
    <strong></strong>
</p>
<p>
    The Beneficiary hereby undertakes to provide the Services Provider with all
    necessary instructions to allow the Services Provider to fulfil its
    obligations and duties pursuant to this Agreement.
</p>
<p>
    <strong></strong>
</p>
<p>
    <strong>2.2. </strong>
    <strong><u>Information duty</u></strong>
    <strong></strong>
</p>
<p>
    <strong></strong>
</p>
<p>
    The Beneficiary hereby undertakes to provide the Services Provider, when
    required, with all necessary information and/or documents to allow the
    Services Provider to fulfil its obligations and duties pursuant to this
    Agreement.
</p>
<p>
    The Services Provider hereby undertakes to keep the Beneficiary fully and
    regularly informed about the Services rendered in its favour.
</p>
<p>
    More generally, the Beneficiary shall take all necessary measures to allow
    the Services Provider to fulfil its obligations and duties in optimum
    conditions.
</p>
<p>
    <strong>ARTICLE 3 </strong>
    <strong>REMUNERATION </strong>
</p>
<p>
    <strong></strong>
</p>
@if($contract->type=="package")
<p>
    <strong>3.1. </strong>
    <strong><u>Remuneration</u></strong>
</p>
<p>
    In consideration of the Services, as defined in <u>Article 1</u> of this
    Agreement, the Beneficiary shall pay to the Services Provider a gross fixed
    remuneration of <strong><input type="text" class="border border-warning rounded" name="contractAmount" value="{{$contract->contractAmount}}" required > (the “<strong>Remuneration</strong>”).
</p>
<p>
    <strong>3.2. </strong>
    <strong><u>Payment of the Remuneration </u></strong>
</p>
<p>
    Upon the signature of the present Agreement, the Beneficiary shall pay to
    the Services Provider a down payment amounting <strong>25%</strong> of the
    Remuneration. The remaining balance due, as well as any taxes related to
    the Remuneration, shall be paid <strong><input type="text" class="border border-warning rounded" name="payementDate" value="{{$contract->payementDate}}" required placeholder="final payement date"></strong>.
</p>
<p>
    In the event the Beneficiary requests the Services Provider to provide
    further services which are not listed or defined under Article 1 above, the
    Parties shall agree, on a case by case basis, on the additional
    remuneration of such further services.
</p>
<p>
@endif
@if($contract->type=="perTime")
<p>
    <strong>3.1. </strong>
    <strong><u>Remuneration</u></strong>
</p>
<p>
    In consideration of the Services, as defined in <u>Article 1</u> of this
    Agreement, the Beneficiary shall pay to the Services Provider a
    remuneration charged on an hourly basis, the hourly rate being of	<input type="text" class="border border-warning rounded" name="payementHour" value="{{$contract->payementHour}}" required placeholder="perhour">(the “<strong>Remuneration</strong>”).
</p>
<p>
	<strong>3.2. </strong>
	<strong><u>Payment of the Remuneration </u></strong>
</p>
<p>
The Services Provider shall address invoices to the Beneficiary on a	<select class="border border-warning rounded" name="payementMonthly" >
                                                                          <option value="Monthly">Monthly</option>
                                                                          <option value="Quarterly">Quarterly (Three month)</option>
                                                                          <option value="Half Yearly">Half Yearly</option>
                                                                          <option value="Yearly">Yearly</option>
                                                                      </select> basis.
</p>
<p>
The Remuneration (as well as any taxes related to it) shall be paid within	<input class="border border-warning rounded" type="text" name="payementDelay" value="{{$contract->payementDelay}}" required placeholder="payement delay"> days upon reception of the corresponding invoice.
</p>
<p>
	In the event the Beneficiary requests the Services Provider to provide
	further services which are not listed or defined under <u>Article 1</u>
	above, the Parties shall agree, on a case by case basis, on hourly rate
	applicable to the performance such further services.
</p>
@endif

    <strong>ARTICLE 4 </strong>
    <strong>TERM AND TERMINATION</strong>
</p>
<p>
    <strong>4.1. </strong>
    <strong><u>Term</u></strong>
    <u></u>
</p>
<p>
    This Agreement is entered into and shall take effect as of as the date of
its signature by the Parties for a period of <strong> [this number will be calculated in an autommatic manner] days </strong> (the “<strong>Term</strong>”) and expiring on <input class="border border-warning rounded" type="text" value="{{$contract->endingDate}}" name="endingDate" required placeholder="Ending date of the contract">.
</p>
<p>
    One (1) month prior to the expiration of the Term, the parties undertake to
    jointly conduct a full business review in relation to the Agreement, in
    order to negotiate in good faith the renewal of this Agreement.
</p>
<p>
    <strong>4.2. </strong>
    <strong><u>Early Termination</u></strong>
    <u></u>
</p>
<p>
    Each Party will have the right to terminate this Agreement before the Term
    by sending a written notice to that effect to the other Party. The
    Agreement will be terminated thirty (30) working days upon reception of the
    written notice by the other Party.
</p>
<p>
    <strong>ARTICLE 5 </strong>
    <strong>LAW AND JURISDICTION</strong>
</p>
<p>
    <strong></strong>
</p>
<p>
    <strong>5.1. </strong>
    <strong><u>Law</u></strong>
</p>
<p>
    This Agreement shall be governed by and construed in accordance with the
    laws of the People’s Republic of China.
</p>
<p>
    <strong>5.2. </strong>
    <strong><u>Jurisdiction</u></strong>
</p>
<p>
    <strong><u></u></strong>
</p>
<p>
    Any dispute, controversy or claim (each, a “<strong>Dispute</strong>”)
    arising out of or relating to this Agreement, or the interpretation,
    breach, termination or validity hereof, shall be resolved at the first
    instance through friendly consultations. Such negotiation shall begin
    immediately after one party has delivered to the other Party a written
    notice requesting such consultation.
</p>
<p>
    If the Dispute remains unresolved upon expiration of the thirty (30)
    Business Day consultation period after the beginning of such negotiation,
    any Party may in its sole discretion elect to submit the matter to
    arbitration with notice to the other Party.
</p>
<p>
    The arbitration shall be conducted in Hong Kong and shall be administered
    by the Hong Kong International Arbitration Centre (“<strong>HKIAC</strong>
    ”) in accordance with the HKIAC Administered Arbitration Rules in force at
    the time of the application for the arbitration.
</p>
<p>
    The place of arbitration shall be Hong Kong.
</p>
<p>
    The language of arbitration shall be English. The arbitral award shall be
    drafted in English.
</p>
<p>
    During arbitration, except for the part in dispute under the arbitration,
    the Agreement shall continue to be executed.
</p>
<p>
    The decision of such arbitral tribunal shall be final and binding on the
    Parties, and the prevailing party may apply to a court of competent
    jurisdiction for enforcement of such award.
</p>
<p>
    The costs and expenses of the arbitration, including the fees of the
    arbitral tribunal, shall be borne and paid by the parties in such
    proportions as the arbitral tribunal shall determine. Each party to the
    arbitration shall reasonably cooperate with each other Party to the
    arbitration in making disclosure of, and providing complete access to, all
    information and documents requested by such other party in connection with
    such arbitral proceedings, subject only to any confidentiality obligations
    binding on such party and attorney-client privilege.
</p>
<p>
    The arbitral tribunal shall decide any dispute submitted by the parties to
    the arbitration strictly in accordance with the substantive laws provided
    under Article 5 hereof and shall not apply any other substantive law.
</p>
<p>
    <strong></strong>
</p>
<p>
    <strong>ARTICLE 6 </strong>
    <strong>MISCELLANEAOUS</strong>
</p>
<p>
    <strong></strong>
</p>
<p>
    <strong>6.1. </strong>
    This Agreement and the rights and obligations hereunder are strictly
    personal and may not be sold, assigned, delegated or transferred by any
    Party to any other person or corporation or any other entity, in whole or
    in part, directly or indirectly, including by merger, contribution,
    management agreement, acquisition or spin-off, except with the other
    Party's prior written consent.
</p>
<p>
    <strong>6.2. </strong>
    The illegality, invalidity or unenforceability in any jurisdiction of any
    provision of this Agreement shall not affect the validity or enforceability
    of any other provision of this Agreement in that or any other jurisdiction.
    The Parties undertake to negotiate in good faith to replace the relevant
    provision by another provision reflecting as closely as possible the
    original intent and purpose of the Parties.
</p>
<p>
    <strong>6.3. </strong>
    Neither this Agreement, nor any provision hereof may be waived, amended or
    modified except pursuant to a written Agreement between the Parties with
    respect to which such waiver, amendment, or modification is to apply.
</p>
<p>
    <strong>6.4. </strong>
    The failure of any Party to insist on strict performance of a covenant or
    of any obligation hereunder shall not be considered as a waiver of such
    Party's right to demand strict compliance therewith in the future, nor
    shall the same be construed as a novation of this Agreement.
</p>
<p>
    <strong>6.5. </strong>
    This Agreement and any documents and instruments to be executed and
    delivered hereunder are intended to embody the final, complete and
    exclusive agreement of the Parties with respect to the subject matter of
    this Agreement, and are intended to supersede all prior agreements,
    understandings and representations written or oral, with respect thereto.
</p>
<p>
    <strong>6.6. </strong>
    This Agreement is executed in two (2) original copies and each Party holds
    one (1) copy hereof.
</p>
<p>
    <strong>IN WITNESS WHEREOF </strong>
    this Agreement has been executed as a deed by or on behalf of the Parties
    the day and year first above written.
</p>
<p>
    <strong></strong>
</p>
<p>
    <strong></strong>
</p>
<p>
    <strong></strong>
</p>
<p>
    <strong></strong>
</p>
<p>
    <strong><u>________________________________</u></strong>
</p>
<p>
    <strong>{{$contract->Contact->company->english_name}}</strong>
</p>
<p>
    Represented by {{$contract->Contact->name}}
</p>
<p>

</p>
<p>

</p>
<p>
    <strong><u>________________________________</u></strong>
</p>
<p>
    <strong>Tai2</strong>
</p>
<p>
    Represented by {{$contract->User->name}}
</p>
<div class="text-center">
  <button  class="mdc-fab mt-5 mdc-fab--extended secondary-fab my-fab text-white" >
  <span class="mdc-button__label ">save and generate a pdf</span>

</button>

</div>
</form>
</div>
</div>
</div>


@endsection
