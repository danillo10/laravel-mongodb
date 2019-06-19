<!DOCTYPE html>
		<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
		@extends('layout.header')
		<body>
				<form action="/clientes" method="POST">
					  @csrf
						<div class="grid-container">
								<div class="grid-x grid-padding-x">
										<div class="medium-6 cell">
												<label>Nome
														<input type="text" id="nome" name="nome" placeholder="">
												</label>
										</div>
										<div class="medium-6 cell">
												<label>CPF
														<input type="text" id="cpf" name="cpf" placeholder="">
												</label>
										</div>
								</div>
								<div>	
										<button class="button">Salvar</button>
								</div>
						</div>
				</form>
				<br>
				<br>
				<table>
				@foreach($clientes as $cliente)
				<tr>
					<td>{{$cliente->nome}}</td>
					<td>{{$cliente->cpf}}</td>	
				</tr>
				@endforeach
				</table>
		</body>
</html>
