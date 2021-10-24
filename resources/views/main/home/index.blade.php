@extends('main.layouts.app')

@section('main')

<!-- BEGIN .slider -->
<div id="slider">

	<div class="slider fullscreen">

		<ul class="slides">
			<li>
				<img src="{{ asset('assets/grupoalertaweb/uploads/2020/06/slider-02-a.jpg') }}">
				<div class="caption mt-10">
					<p class="right">
						<span class="animated delay-10 fadeInUp" style="font-family: 'Barlow Condensed' !important; text-transform: uppercase; height: auto; width: auto; color: transparent; -webkit-text-stroke: 1px #fff; text-decoration: none; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; text-align: left; line-height: 80px; letter-spacing: 0px; font-weight: 700; font-size: 70px;">Força Alerta</span>
						<br>
						<span class="animated delay-20 fadeInDown" style="font-family: 'Barlow Condensed' !important; text-transform: uppercase; color: #fff; letter-spacing: 0px; font-weight: 700; font-size: 70px;"> Sua segurança</span>
						<br>
						<span class="animated delay-30 bounceInDown" style="font-family: 'Barlow Condensed' !important; text-transform: uppercase; color: #fff; background: var(--red); padding: 0 15px;; letter-spacing: 0px; font-weight: 700; font-size: 70px;">profissional</span>
						<br>
						<a href="#" class="btn btn-large animated delay-10 bounceInRight white b-radius-0 black-text mr-2">Saiba mais</a>
						<a href="#" class="btn btn-large animated delay-10 bounceInLeft transparent bg-border border-2 border-white b-radius-0 ">Contrate</a>
					</p>
				</div>
			</li>
			<li>
				<img src="{{ asset('assets/grupoalertaweb/uploads/sites/3/2020/06/slider-03-a.jpg') }}">
				<!-- random image -->
				<div class="caption left-align">
					<h3>Left Aligned Caption</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="{{ asset('assets/grupoalertaweb/uploads/sites/3/2020/06/slider-01-a.jpg') }}">
				<!-- random image -->
				<div class="caption right-align">
					<h3>Right Aligned Caption</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="{{ asset('assets/grupoalertaweb/uploads/sites/3/2020/06/slider-04-a.jpg') }}"> <!-- random image -->
				<div class="caption center-align">
					<h3>This is our big Tagline!</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
		</ul>
	</div>

</div>
<!-- END .slider -->

<!-- BEGIN #quem-somos -->
<div id="quem-somos">

	<div class="container">

		<div class="row pt-5 pb-5">

			<div class="col s10">

				<div class="row">

					<div class="col s12">

						<h4 class="subtitle">Quem Somos</h4>

					</div>

				</div>

				<div class="row">

					<div class="col s11">

						<div class="row no-padding">

							<div class="col s12 m6 l6">
								<h2 class="title">Os melhores serviços para você e sua empresa</h2>
							</div>

							<div class="col s12 m6 l6">
								<p class="description">
									Atuamos no mercado de segurança e serviços nos segmentos de Segurança Eletrônica,
									Segurança Patrimonial, Terceirização de mão de obra e Construção Civil,
									prestando serviços no âmbito público e privado.
									Nossa abrangência territorial são as cidades da região do Nordeste brasileiro.
								</p>
							</div>

						</div>

					</div>

				</div>


				<div class="white pt-1 pb-1 pr-2">

					<div class="row">

						@for($i = 1; $i <= 3; $i ++ )
						<div class="col s4">
							<div class="card">
								<div class="card-content">
									<div class="card-number">0{{ $i }}</div>
									<div class="card-title">
										<span class="subtitle">Responde ao ataque</span>
										<span class="title">Perito de confiança</span>
									</div>
									<p>
										Oferecemos as melhores soluções de segurança,
										incluindo serviços de guarda e patrulhas móveis
									</p>
								</div>
							</div>
						</div>
						@endfor

					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="contact">

		<div class="container">

			<div class="row">

				<div class="col s12">

					<div class="title">Contrate um dos nossos
						<br>
						serviços
					</div>

					<div class="subtitle">0800-556-1700</div>

					<a href="#">Faça um orçamento</a>

				</div>

			</div>

		</div>

	</div>

</div>
<!-- END #quem-somos -->

<!-- BEGIN #servicos -->
<div id="servicos">

	<div class="container">

		<div class="row">

			<div class="col s12">

				<div class="black pt-5 pb-5">

					<div class="row">

						<div class="col s12 center-align">

							<h4 class="subtitle white-text"> o que nós fazemos</h4>

						</div>

					</div>

					<div class="row">

						<div class="col s12 center-align">

							<h2 class="title white-text center-align">Nível superior de serviços <br> para a sua empresa</h2>

						</div>

						<div class="col s12 mb-2"></div>

					</div>

					<div class="row pt-1 pb-1 pr-2">

						@for($i = 1; $i <= 3; $i ++ )
						<div class="col s12">
							<div class="card no-border transparent">
								<div class="card-image">
									<img src="{{ asset('assets/grupoalertaweb/uploads/2020/06/slider-02-a.jpg') }}" class="b-radius-0">
								</div>
								<div class="card-content bg-border border-1 border-grey-darken-4 mt-1">
									<div class="card-icon">
										<img src="{{ asset('assets/grupoalertaweb/uploads/images/icon_eletronica.png') }}" alt="">
									</div>
									<div class="card-title">
										<span class="title">Perito de confiança</span>
									</div>
									<p>
										Especificar, implementar e manter as soluções de segurança mais adequadas para cada um de nossos clientes,
										e contribuir ativamente para sua segurança, seu sucesso e bem estar.
									</p>
								</div>
							</div>
						</div>
						@endfor

					</div>

				</div>

			</div>

		</div>

	</div>
<!-- END #servicos -->

<!-- BEGIN #seguranca -->
<div id="seguranca-profissional">

	<div class="container">

		<div class="row">

			<div class="col s12">

				<div class="pt-5 pb-5">

					<div class="row">

						<div class="col s12 center-align">

							<h4 class="subtitle grey-text"> Nossa Segurança </h4>

						</div>

					</div>

					<div class="row">

						<div class="col s12">

							<h2 class="title black-text center-align">Segurança Profissional</h2>

						</div>

						<div class="col s12 mb-2"></div>

					</div>

					<div class="row pt-1 pb-1 pr-2">

						<div class="col s12">
							<div class="card horizontal no-border transparent">
								<div class="card-title">
									<span class="title white-text">Executamos mais de <u>400 trabalhos</u>
										com segurança todos os anos.</span>
								</div>
								<div class="card-image">
									<img src="{{ asset('assets/grupoalertaweb/uploads/2020/05/dsvy-image-3-1.png') }}" class="b-radius-0">
								</div>
								<div class="card-icon">
									<i class="flaticon-policeman"></i>
									{{-- <img src="{{ asset('assets/grupoalertaweb/uploads/images/icon_eletronica.png') }}" alt=""> --}}
								</div>
								<div class="card-stacked white">
									<div class="card-content">
										<h2>Segurança integrada eficaz</h2>
										<p class="grey-text">
											Obtenha a melhor segurança de um guarda-costas atencioso e profissional. Nossa solução é econômica e temos a certeza de que você e sua equipe de comando são parte contra uma tentativa.
										</p>
										<ul class="">
											<li class="">
												<span class="">
													<i aria-hidden="true" class="fas fa-square-full"></i> </span>
												<span class="elementor-icon-list-text">Equipe de segurança experiente</span>
											</li>
											<li class="">
												<span class="">
													<i aria-hidden="true" class="fas fa-square-full"></i> </span>
												<span class="elementor-icon-list-text">Guarda de gerenciamento de patrulha móvel</span>
											</li>
											<li class="">
												<span class="">
													<i aria-hidden="true" class="fas fa-square-full"></i> </span>
												<span class="elementor-icon-list-text">Serviços de Segurança Individual</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>
<!-- END #seguranca -->

@endsection
