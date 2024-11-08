<!DOCTYPE html>
<html>
<heal>
<table>原住民工程</table>
</heal>
<body>
<h1>原住民工程</h1>
<table border="1">
 @foreach ($Details as $Detail)
   <tr>
        <td>{{$Detail->date_listed}}</td>
        <td>{{$Detail->year}}</td>
        <td>{{$Detail->application_number}}</td>
        <td>{{$Detail->implementation_area}}</td>
        <td>{{$Detail->township}}</td>
        <td>{{$Detail->province_city_code}}</td>
        <td>{{$Detail->province_city_town_code}}</td>
        <td>{{$Detail->project_name}}</td>
        <td>{{$Detail->central_grant}}</td>
        <td>{{$Detail->local_matching_funds}}</td>
        <td>{{$Detail->total_approved_budget_thousand}}</td>
        <td>{{$Detail->implementation_item}}</td>
        <td>{{$Detail->notes}}</td>
   </tr>
 @endforeach
</table>

</body>
</html>