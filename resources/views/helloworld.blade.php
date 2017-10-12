@extends('layouts.app')


@section('content')
<div class ="container">
<div class="jumbotron">
            <h3>Download Custom Report</h3>
            <hr/>
            <button type="submit" class="btn btn-default">Generate Report</button>
            <br/>
            <br/>
            <p>This report can take up to 10 minutes - show spinning wheel.</p>
            <button type="submit" class="btn btn-warning pull-right">Download Report</button>
            </div>
        
            <div class="row">
            <div class="col-lg-12">      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>SKU</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $variableone }}</td>
      </tr>
    </tbody>
  </table>

  
    
</div>
</div>
</div>
@endsection
</table>