<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contrato PDF</title>
  </head>
  <body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nro</th>
                <th>Cliente</th>                
                <th>Pago</th>
                <th>Cobertura</th>
                <th>Placa vehiculo</th>
            </tr>
        </thead>  
        <tbody>
            
                <tr>
                  <td>{{$contrato->codigo}}</td>
                  <td>{{$contrato->vehiculo->cliente->nombre}} {{$contrato->vehiculo->cliente->apellido}}</td>
                  <td>{{$contrato->pago}}</td>
                  <td>{{$contrato->cobertura}}</td>
                  <td>{{$contrato->vehiculo->placa}}</td>
                </tr>
                <tr>
                  <td>Poliza contratada</td>                  
                </tr>
                <tr>
                  <td>Valor: {{$contrato->plan->valor}} Bs</td>
                  <tr>
                    <td>Terceros</td>
                  </tr>
                  <tr>
                    <td>Muerte<br> {{$contrato->plan->ter_muerte}} Bs</td>
                    <td>Invalidez<br> {{$contrato->plan->ter_invalidez}} Bs</td>
                    <td>Medicos<br> {{$contrato->plan->ter_medicos}} Bs</td>
                  </tr>
                  <tr>
                    <td>Ocupantes</td>
                  </tr>
                  <tr>
                    <td>Muerte<br> {{$contrato->plan->ocu_muerte}} Bs</td>
                    <td>Invalidez<br> {{$contrato->plan->ocu_invalidez}} Bs</td>
                    <td>Medicos<br> {{$contrato->plan->ocu_medicos}} Bs</td>         
                  </tr>
                  <tr>
                    <td>Otros</td>
                  </tr>
                  <tr>
                    <td>Daños<br> {{$contrato->plan->danos}} Bs</td>
                    <td>Materiales<br> {{$contrato->plan->materiales}} Bs</td>
                    <td>Legal<br> {{$contrato->plan->legal}} Bs</td>
                    <td>Limites<br> {{$contrato->plan->limites}} Bs</td>
                  </tr>
                  <tr>
                    <td>Funerarios<br> {{$contrato->plan->funerarios}} Bs</td>
                    <td>Grua<br> {{$contrato->plan->grua}} Bs</td>
                    <td>Indemnizacion<br> {{$contrato->plan->indem}} Bs</td>
                    <td>Extraterritoria<br> {{$contrato->plan->extra}} Bs</td>
                  </tr>
                  
                           
                </tr>
                
                <tr>
                  <td>Cobertura total: </td>
                </tr>
                
            
        </tbody>

    </table>
  </body>
</html>














