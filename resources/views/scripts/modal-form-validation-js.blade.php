<script>
    $(document).ready(function () {

        var todayTimeStamp = +new Date; // Unix timestamp in milliseconds
        var oneDayTimeStamp = 1000 * 60 * 60 * 24; // Milliseconds in a day
        var diff = todayTimeStamp - oneDayTimeStamp;
        var yesterdayDate = new Date(diff);
        var yesterdayString = yesterdayDate.getFullYear() + '-' + (yesterdayDate.getMonth() + 1) + '-' + yesterdayDate.getDate();

        $.validator.addMethod('filesize', function (value, element, param) {
            return this.optional(element) || (element.files[0].size <= param)
        }, 'File size must be less than {0}');

        $.validator.addMethod("DisplayStart", function (value, element) {
            var displayDate = $('#start_date').val();
            return yesterdayDate <= Date.parse(value) || value == "";
        }, "* Display Start can not be in the past");

        $.validator.addMethod("endDate", function (value, element) {
            var startDate = $('#start_date').val();
            return Date.parse(startDate) <= Date.parse(value) || value == "";
        }, "* End date must be after Display Start Date");


        $("#frm-submit-add-new-banner").validate({
            rules: {

                banner_title: {
                    required: true,
                    minlength: 2,
                    maxlength: 100,
                },
                banner_message: {
                    required: true,
                    minlength: 2,
                    maxlength: 100,
                },

                start_date: {
                    required: true,
                    DisplayStart: 'Date Provided can be in the past'

                },

                end_date: {
                    required: true,
                    endDate: 'Date Provided can be the same or older than Display start date'
                },
                banner_image: {
                    required: true,
                    extension: "jpg,jpeg,png",
                    filesize: 950000
                },
            },
            messages: {
                banner_title: {
                    required: 'Content Title field is required',
                    maxlength: 'Title must not exceed 100 characters long',
                    minlength: 'Title must be at least 10 characters long'
                },
                banner_message: {
                    maxlength: 'Details must be at most 1 characters long',
                    minlength: 'Details must be at least 500 characters long'
                },
                banner_image: {
                    required: 'Banner Image upload is required',
                    extension: 'Banner Image File must be of type jpg or jpeg or png',
                    filesize: 'File Size (Banner Image) must not be more than 50KB'

                },
                start_date: {
                    required: 'Start date cannot be empty',
                    DisplayStart: 'Date Provided can be in the past'

                },

                end_date: {
                    required: 'End date cannot be empty',
                    endDate: 'Date Provided can be the same or older than Display start date'
                },
            },
            submitHandler: function (form) {
                form.submit();
            }
        });

    });
</script>
