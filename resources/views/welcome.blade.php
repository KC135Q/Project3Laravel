@extends('layouts.app')

@section('content')
<div class="container">
                @if (Auth::check())
                <div class="panel-heading">Welcome, {{ $user->name }}!</div>
                
                            <div class="jumbotron">
                            <h3>Download Custom Report</h3>
                            <hr/>
                            <button type="submit" class="btn btn-default">Generate Report</button>
                            <br/>
                            <br/>
                            <p>This report can take up to 10 minutes - show spinning wheel.</p>
                            
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
                        <td>DataHere</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="col-4">
                  <button type="submit" class="btn btn-warning pull-right">Download Report</button>
                    </div>
                </div>
                </div>               
                
                            @else
                                <div class="panel-heading">Login or Register To Get Started With Your Report</div>
                
                                <div class="panel-body">
                                <a href="{{ url('/login') }}">Login</a> or <a href="{{ url('/register') }}">Register</a>
                                </div>
                            @endif
                
                
                            </div>
                        </div>
                    </div>
                </div>
                @endsection
                