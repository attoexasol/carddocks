

<h1 style="text-align: center;"><u>Branch List </u> </h1>

<table style="border-collapse: collapse; width: 100%; border: 1px solid #000;">
    <tr>
        <td style="border: 1px solid #000; padding: 8px;"><b>Serial No</b></th>
        <td style="border: 1px solid #000; padding: 8px;"><b>Branch Code</b></th>
        <td style="border: 1px solid #000; padding: 8px;"><b>Branch Name</b></th>
        <td style="border: 1px solid #000; padding: 8px;"><b>Area</b>/th>
        <td style="border: 1px solid #000; padding: 8px;"><b>Contact No</b></th>
        <td style="border: 1px solid #000; padding: 8px;"><b>Address</b></th>
        <td style="border: 1px solid #000; padding: 8px;"><b>Routing No<</b>/th>
        <td style="border: 1px solid #000; padding: 8px;"><b>Cheque Leaf Last Serial</b></th>
    </tr>

    <tbody>
        @foreach ($data as $branch)
            <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000; padding: 8px;">{{ $loop->iteration }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $branch->Branch_Code }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $branch->Branch_Name }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $branch->Area }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $branch->Contact_No }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $branch->Address }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $branch->ROUTING_NO }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $branch->CHQ_LEAF_LAST_SL }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

