<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GHN Province, Districts, and Wards Dropdown</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            function fetchProvinceData() {
                var apiUrl = "https://online-gateway.ghn.vn/shiip/public-api/master-data/province";
                var apiKey = "7293aab0-b9b0-11ee-b38e-f6f098158c7e"; // Replace with your actual API key

                $.ajax({
                    url: apiUrl,
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        'Token': apiKey,
                    },
                    success: function(data) {
                        renderProvinceDropdown(data.data);
                    },
                    error: function(error) {
                        console.error("Error fetching province data:", error);
                    }
                });
            }

            function fetchDistrictsData(provinceId) {
                var apiUrl = "https://online-gateway.ghn.vn/shiip/public-api/master-data/district";
                var apiKey = "7293aab0-b9b0-11ee-b38e-f6f098158c7e"; // Replace with your actual API key

                $.ajax({
                    url: apiUrl,
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        'Token': apiKey,
                    },
                    data: {
                        province_id: provinceId
                    },
                    success: function(data) {
                        renderDistrictsDropdown(data.data);
                    },
                    error: function(error) {
                        console.error("Error fetching district data:", error);
                    }
                });
            }

            function fetchWardsData(districtId) {
                var apiUrl = "https://online-gateway.ghn.vn/shiip/public-api/master-data/ward";
                var apiKey = "7293aab0-b9b0-11ee-b38e-f6f098158c7e"; // Replace with your actual API key

                $.ajax({
                    url: apiUrl,
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        'Token': apiKey,
                    },
                    data: {
                        district_id: districtId
                    },
                    success: function(data) {
                        renderWardsDropdown(data.data);
                    },
                    error: function(error) {
                        console.error("Error fetching ward data:", error);
                    }
                });
            }

            function renderProvinceDropdown(provinceData) {
                var selectProvince = $('#province');
                selectProvince.empty();
                selectProvince.append('<option value="" selected>--chọn tỉnh--</option>');

                provinceData.forEach(function(province) {
                    selectProvince.append('<option value="' + province.ProvinceID + '">' + province
                        .ProvinceName + '</option>');
                });

                // Set up event listener for province change
                selectProvince.on('change', function() {
                    var selectedProvinceId = $(this).val();
                    if (selectedProvinceId) {
                        fetchDistrictsData(selectedProvinceId);
                    } else {
                        // If no province selected, clear districts and wards dropdowns
                        renderDistrictsDropdown([]);
                        renderWardsDropdown([]);
                    }
                });
            }

            function renderDistrictsDropdown(districtsData) {
                var selectDistricts = $('#districts');
                selectDistricts.empty();
                selectDistricts.append('<option value="" selected>--chọn quận/huyện--</option>');

                districtsData.forEach(function(district) {
                    selectDistricts.append('<option value="' + district.DistrictID + '">' + district
                        .DistrictName + '</option>');
                });

                // Set up event listener for district change
                selectDistricts.on('change', function() {
                    var selectedDistrictId = $(this).val();
                    if (selectedDistrictId) {
                        fetchWardsData(selectedDistrictId);
                    } else {
                        // If no district selected, clear wards dropdown
                        renderWardsDropdown([]);
                    }
                });
            }

            function renderWardsDropdown(wardsData) {
                var selectWards = $('#ward');
                selectWards.empty();
                selectWards.append('<option value="" selected>--chọn phường/xã--</option>');

                wardsData.forEach(function(ward) {
                    selectWards.append('<option value="' + ward.WardCode + '">' + ward.WardName +
                        '</option>');
                });
            }

            // Call the fetchProvinceData function to initiate the data fetching
            fetchProvinceData();
        });
    </script>
</head>

<body>

    <select title="Province" class="validate-select" id="province" name="province">
        <option value="" selected>--chọn tỉnh--</option>
    </select>

    <select title="Districts" class="validate-select" id="districts" name="districts">
        <option value="" selected>--chọn quận/huyện--</option>
    </select>

    <select title="Wards" class="validate-select" id="ward" name="ward">
        <option value="" selected>--chọn phường/xã--</option>
    </select>

</body>

</html>
