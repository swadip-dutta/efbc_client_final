

@foreach ($grouplist as $golf)
<table style="float: inline-start;margin-right: 20px;">

    <thead>

        <tr>
            <th>{{ $golf->grp_s_category->name}}</th>
        </tr>
    </thead>
    <tbody>
        <tr>

            <td>


                  @php if(!empty($golf->grp_p1_register->first_name)) echo $golf->grp_p1_register->first_name .'<br>' @endphp
                  @php if(!empty($golf->grp_p2_register->first_name)) echo $golf->grp_p2_register->first_name .'<br>' @endphp
                  @php if(!empty($golf->grp_p3_register->first_name)) echo $golf->grp_p3_register->first_name .'<br>' @endphp
                  @php if(!empty($golf->grp_p4_register->first_name)) echo $golf->grp_p4_register->first_name .'<br>' @endphp
                  @php if(!empty($golf->grp_p5_register->first_name)) echo $golf->grp_p5_register->first_name .'<br>' @endphp
                  @php if(!empty($golf->grp_p6_register->first_name)) echo $golf->grp_p6_register->first_name .'<br>' @endphp
                  @php if(!empty($golf->grp_p7_register->first_name)) echo $golf->grp_p7_register->first_name .'<br>' @endphp
                  @php if(!empty($golf->grp_p8_register->first_name)) echo $golf->grp_p8_register->first_name .'<br>' @endphp
            </td>
        </tr>


    </tbody>

</table>
@endforeach
<style>
  .wrapper {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
}
html,


body {
margin: 0;
font-family: sans-serif;
font-weight: 100;
}
.container {
margin: 20px;
}


table {
width: 250px;
border-collapse: collapse;
overflow: hidden;
box-shadow: 0 0 20px rgba(0,0,0,0.1);
}
tr:nth-child(even) {
background: #F8F8F8;
}
th,
td {
padding: 15px;
background-color: rgba(255,255,255,0.2);
color: rgb(0, 0, 0);
}

th {
text-align: center;
}


thead,th {
background-color: #233e91;
  color: #ffff;
}

tbody tr:hover {
background-color: #233e9114;
}

</style>
