<!DOCTYPE html>
<html>
<head>
    <title>Gorn</title>
</head>
<body>
    @if( $emailContent['type'] == 'demo' )
    <p>First Name: {{ isset($emailContent['first_name']) ? $emailContent['first_name'] : '' }}</p>
    <p>Last Name: {{ isset($emailContent['last_name']) ? $emailContent['last_name'] : '' }}</p>
    <p>Email: {{ isset($emailContent['email']) ? $emailContent['email'] : '' }}</p>
    <p>Phone: {{ isset($emailContent['phone']) ? $emailContent['phone'] : '' }}</p>
    <p>Facility Name: {{ isset($emailContent['facility_name']) ? $emailContent['facility_name'] : '' }}</p>
    <p>Facility Address: {{ isset($emailContent['facility_add']) ? $emailContent['facility_add'] : '' }}</p>
    @elseif( $emailContent['type'] == 'apply' )
    <p>First Name: {{ isset($emailContent['first_name']) ? $emailContent['first_name'] : '' }}</p>
    <p>Last Name: {{ isset($emailContent['last_name']) ? $emailContent['last_name'] : '' }}</p>
    <p>Mobile: {{ isset($emailContent['mobile_number']) ? $emailContent['mobile_number'] : '' }}</p>
    <p>Address: {{ isset($emailContent['address']) ? $emailContent['address'] : '' }}</p>
    <p>City: {{ isset($emailContent['city']) ? $emailContent['city'] : '' }}</p>
    <p>State: {{ isset($emailContent['state']) ? $emailContent['state'] : '' }}</p>
    <p>Country: {{ isset($emailContent['country']) ? $emailContent['country'] : '' }}</p>
    <p>Years of experience: {{ isset($emailContent['experience']) ? $emailContent['experience'] : '' }}</p>
    <p>Add me to the Emergency Response Team: {{ isset($emailContent['ert']) ? $emailContent['ert'] : '' }}</p>
    <p>Add me for the Volunteer Position: {{ isset($emailContent['rt']) ? $emailContent['rt'] : '' }}</p>
    <p>How Did You Hear About Go RN: {{ isset($emailContent['about_go_rn']) ? $emailContent['about_go_rn'] : '' }}</p>
    @endif
    <p>Thank you</p>
</body>
</html>