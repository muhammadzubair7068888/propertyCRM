<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Invoice</title>
    {{-- <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .invoice-preview-wrapper {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .invoice-preview-card {
            border: none;
        }

        .logo-wrapper {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .invoice-logo {
            margin-left: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            color: #3498db;
        }

        .address {
            margin-bottom: 10px;
        }

        .contact-info {
            margin-bottom: 5px;
            color: #555;
        }

        .invoice-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .invoice-number {
            color: #3498db;
        }

        .invoice-date-wrapper {
            text-align: right;
        }

        .invoice-date-title {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        .fw-bold {
            font-weight: bold;
        }

        .invoice-spacing {
            margin: 20px 0;
        }

        .invoice-padding {
            padding: 20px;
        }

        .invoice-note {
            margin-top: 20px;
            font-weight: bold;
            color: #555;
        }
    </style> --}}
</head>
<body>
    <section class="invoice-preview-wrapper">
        <div class="row invoice-preview">
            <!-- Invoice -->
            <div class="col-xl-9 col-md-8 col-12">
                <div class="card invoice-preview-card">
                    <div class="card-body invoice-padding pb-0">
                        <!-- Header starts -->
                        <div class="row ">
                            <div class=" col-lg-6">
                                <!-- Your address details here -->
                                <h3 class="text-primary invoice-logo">Butterfly Prime Realtors</h3>
                                <div class="address">
                                    <p class="contact-info">Kingsway Avenue</p>
                                    <p class="contact-info">P.O Box 1234 . 568 Nairobi, Kenya</p>
                                    <p class="contact-info">+254705828000</p>
                                    <p class="contact-info">info@butterflyprime.com</p>
                                    <p class="contact-info">www.butterflyprime.com</p>
                                </div>
                            </div>
                            <div class="ml-auto  col-lg-6">
                                <h4 class="invoice-title">

                                    <span class="invoice-number">{{$invoice->invoice_number}}</span>
                                </h4>
                                <div class="invoice-date-wrapper">
                                    <p class="invoice-date-title">Date Issued:</p>
                                    <p class="invoice-date">{{date('F, Y', strtotime($invoice->created_at))}}</p>
                                </div>
                                <div class="invoice-date-wrapper">
                                    <p class="invoice-date-title">Due Date:</p>
                                    <p class="invoice-date">{{$invoice->leaseInfo->due_on ."-". date('m-Y', strtotime($invoice->created_at))}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Header ends -->
                    </div>

                    <hr class="invoice-spacing" />

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="py-1">Date</th>
                                    <th class="py-1">Narration</th>
                                    <th class="py-1">Debit</th>
                                    <th class="py-1">Credit</th>
                                    <th class="py-1">Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-1">
                                        <p class="card-text fw-bold mb-25">{{ now()->format('Y-m-d') }}</p>


                                    </td>
                                    <td class="py-1">
                                      <p class="card-text fw-bold mb-25">Native App Development</p>

                                    </td>
                                    <td class="py-1">
                                      <span class="fw-bold">$60.00</span>
                                    </td>
                                    <td class="py-1">
                                      <span class="fw-bold">30</span>
                                    </td>
                                    <td class="py-1">
                                      <span class="fw-bold">$1,800.00</span>
                                    </td>
                                  </tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="invoice-spacing" />

                    <!-- Invoice Note starts -->
                    {{-- <div class="card-body invoice-padding pt-0">
                        <div class="row">
                            <div class="col-12">
                                <span class="fw-bold invoice-note">Note:</span>
                                <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
</body>
</html>
