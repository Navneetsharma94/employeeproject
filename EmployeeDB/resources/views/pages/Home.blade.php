@extends('layouts.app')
<style> 
    .newrow{
        margin-left:100px;
    }
</style>
@section('content')

    <div class="container">
        <form class="" action="/employee" method="POST" enctype="multipart/form-data">
            <form class="createblog" action="/posts" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-row">
                        <br>
                        <div class="form-group col-md-6">
                            <div class="searchbox">
                                <label for="inputEmail4">Personnel Number</label>
                                <input class="form-control mr-sm-2" type="search" placeholder="personnel_number" name="personnel_number" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Claim Number</label>
                            <input type="text" class="form-control" id="inputPassword4" name="claim_number" placeholder="Claim number">
                        </div>
                    </div>
                    <div class="form-row">
                        <br>
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">EmployeeName</label>
                        <input type="text" class="form-control" id="inputEmail4" name="emp_name" placeholder="employee name">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Designation</label>
                        <input type="text" class="form-control" id="inputPassword4" name="designation"placeholder="Designation">
                        </div>
                    </div>
                    <div class="form-row">
                        <br>
                        <div class="form-group col-md-6">
                        <label for="inputAddress">Basic Pay(as on 01-04-2019)</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="" name="basic_pay">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Place of Duty</label>
                        <input type="text" class="form-control" id="inputPassword4" name="place" placeholder="Place of Duty">
                        </div>
                        <hr>
                    </div>
                    <div class="form-row">
                        <br>
                        <div class="form-group col-md-6">
                        <label for="inputAddress">Name of Patient</label>
                        <input type="text" class="form-control" id="inputAddress" name="patient_name" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Relationship With Employee</label>
                        <input type="text" class="form-control" name="relationship" id="inputPassword4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Date of Claim Submission</label>
                            <input type="date" class="form-control" name="date" id="inputPassword4" placeholder="">
                        </div>
                    </div>

                   <br>
                   <br>
                   <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Voucher Date</th>
                            <th scope="col">Claim Type</th>
                            <th scope="col">Voucher No.</th>
                            <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                    <td><input type="date" name="voucher_date"> </td>
                                    <td>
                                        <select name="cars" id="cars">
                                            <option value="medicines">Medicines</option>
                                            <option value="diagnosis/test">Diagnosis/Test</option>
                                            <option value="consultation">Consultation</option>
                                            <option value="appliances">Appliances</option>

                                        </select>
                                    </td> 
                                    <td><input type="text" name="voucher_date"></td>
                                    <td><input type="text" name="amount"> </td>
                                    <a href="#" class="newrow"><i class="fas fa-plus"></i> </a> 
                                    <!-- ((basic+da)/30)*15 -->
                            </tr>

 
                        </tbody>
                        </table>
                        
                    <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection