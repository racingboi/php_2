$(document).ready(function () {
    let ward = "";
    let district = "";
    function fetchProvinceData() {
        ward = "";
        var apiUrl =
            "https://online-gateway.ghn.vn/shiip/public-api/master-data/province";
        var apiKey = "7293aab0-b9b0-11ee-b38e-f6f098158c7e"; // Replace with your actual API key

        $.ajax({
            url: apiUrl,
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                Token: apiKey,
            },
            success: function (data) {
                renderProvinceDropdown(data.data);
            },
            error: function (error) {
                console.error("Error fetching province data:", error);
            },
        });
    }

    function fetchDistrictsData(provinceId) {
        ward = "";
        var apiUrl =
            "https://online-gateway.ghn.vn/shiip/public-api/master-data/district";
        var apiKey = "7293aab0-b9b0-11ee-b38e-f6f098158c7e"; // Replace with your actual API key

        $.ajax({
            url: apiUrl,
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                Token: apiKey,
            },
            data: {
                province_id: provinceId,
            },
            success: function (data) {
                renderDistrictsDropdown(data.data);
            },
            error: function (error) {
                console.error("Error fetching district data:", error);
            },
        });
    }
    function fetchFee(ward, district) {
        var apiUrl =
            "https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee";
        var apiKey = "7293aab0-b9b0-11ee-b38e-f6f098158c7e"; // Replace with your actual API key

        console.log(district, ward);
        $.ajax({
            url: apiUrl,
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                Token: apiKey,
            },
            data: {
                from_district_id: 1454,
                from_ward_code: "21211",
                service_id: 53319,
                service_type_id: 1,
                to_district_id: district,
                to_ward_code: `"${ward}"`,
                height: 50,
                length: 20,
                weight: 200,
                width: 20,
                insurance_value: 10000,
                cod_failed_amount: 2000,
                coupon: null,
            },
            success: function (data) {
                renderFee(data.data.total);
                console.log(data.data.total);
            },
            error: function (error) {
                console.error("Error fetching ward data:", error);
            },
        });
    }
    function fetchWardsData(districtId) {
        var apiUrl =
            "https://online-gateway.ghn.vn/shiip/public-api/master-data/ward";
        var apiKey = "7293aab0-b9b0-11ee-b38e-f6f098158c7e"; // Replace with your actual API key

        $.ajax({
            url: apiUrl,
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                Token: apiKey,
            },
            data: {
                district_id: districtId,
            },
            success: function (data) {
                renderWardsDropdown(data.data);
            },
            error: function (error) {
                console.error("Error fetching ward data:", error);
            },
        });
    }

    function renderProvinceDropdown(provinceData) {
        var selectProvince = $("#province");
        selectProvince.empty();
        selectProvince.append(
            '<option value="" selected>--chọn tỉnh--</option>'
        );

        provinceData.forEach(function (province) {
            selectProvince.append(
                '<option value="' +
                    province.ProvinceID +
                    '">' +
                    province.ProvinceName +
                    "</option>"
            );
        });

        // Set up event listener for province change
        selectProvince.on("change", function () {
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
    function renderFee(fee) {
        let feeHtml = $("#GHNfee");
        var numberFormat = new Intl.NumberFormat("vi-VN");

        // Format the feeValue using the format method
        var formattedFee = numberFormat.format(fee);
        feeHtml.text(formattedFee);
    }
    function renderDistrictsDropdown(districtsData) {
        var selectDistricts = $("#districts");
        selectDistricts.empty();
        selectDistricts.append(
            '<option value="" selected>--chọn quận/huyện--</option>'
        );

        districtsData.forEach(function (district) {
            selectDistricts.append(
                '<option value="' +
                    district.DistrictID +
                    '">' +
                    district.DistrictName +
                    "</option>"
            );
        });

        // Set up event listener for district change
        selectDistricts.on("change", function () {
            var selectedDistrictId = $(this).val();
            if (selectedDistrictId) {
                district = selectedDistrictId;
                fetchWardsData(selectedDistrictId);
            } else {
                // If no district selected, clear wards dropdown
                renderWardsDropdown([]);
            }
        });
    }

    function renderWardsDropdown(wardsData) {
        ward = "";

        var selectWards = $("#ward");
        selectWards.empty();
        selectWards.append(
            '<option value="" selected>--chọn phường/xã--</option>'
        );
        // selectWards.on("click", fetchFree());
        wardsData.forEach(function (ward) {
            selectWards.append(
                '<option value="' +
                    ward.WardCode +
                    '">' +
                    ward.WardName +
                    "</option>"
            );
        });
        selectWards.on("change", function () {
            ward = $(this).val();
        });
    }
    let btnBaoGia = $("#baogia");
    btnBaoGia.on("click", () => {
        if (ward !== "") {
            fetchFee(ward, district);
        } else {
            alert("Vui lòng chọn Phường/Xã!");
        }
    });

    // Call the fetchProvinceData function to initiate the data fetching
    fetchProvinceData();
});
