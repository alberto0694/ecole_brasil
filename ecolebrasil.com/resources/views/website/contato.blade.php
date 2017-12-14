@extends('layouts.website')

@section('content')
	<div class="row" style="margin-top: 30px; margin-bottom: 30px">
		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-6">
	                <h3 class="title-pink-begin-text">ENTRE EM CONTATO</h3>          
	                <p class="gray-text">
						Você pode entrar em contato conosco preenchendo o formulário ou através de e-mail ou telefone:						
	                </p>		
	                <p class="gray-text"><b>contato@ecolebrasil.com</b></p>	
	                <p class="gray-text"><b>+55 51 3237.2800</b></p>	
			</div>
			<div class="col-md-6">
	                <h3></h3>          
	                <ul style="padding-left: 0px;">
	                    <li>
	                        <div class="input-append newsletter-box ">
	                            <input type="text" class="full " placeholder="Seu nome">
	                            <input type="text" class="full " placeholder="Telefone">
	                            <input type="text" class="full " placeholder="E-mail">
	                            <input type="text" class="full " placeholder="Cidade/Estado">
	                            <button class="btn  bg-gray" type="button"> Enviar </button>
	                        </div>
	                    </li>
	                </ul>				
			</div>			
		</div>
	</div>
@endsection