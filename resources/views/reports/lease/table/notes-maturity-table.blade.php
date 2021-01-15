@if(isset($startDate))
    <div class="table-responsive px-1 cardSimiliarShadow bg-white">
        <table id="datatable-notes-maturity"
               class="table  dt-responsive  no-footer dtr-inline collapsed"
               cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info">
            <thead>
            <tr>
                <th>@lang('master.Id')</th>
                <th>@lang('master.Payment duration')</th>
                <th>@lang('master.Total cost amount in currency')</th>
                <th>@lang('master.Total cost amount in base currency')</th>
                <th>@lang('master.Fixed asset amount in currency')</th>
                <th>@lang('master.Fixed asset amount in base currency')</th>
                <th>@lang('master.Repayment of loan in currency')</th>
                <th>@lang('master.Repayment of loan in base currency')</th>
                <th>@lang('master.Interest cost in currency')</th>
                <th>@lang('master.Interest cost in base currency')</th>
            </tr>


            </thead>
            <tbody>
            @php($totalAmount = 0)
            @php($totalAmountBaseCurrency = 0)
            @php($totalFixedAmount = 0)
            @php($totalFixedAmountBaseCurrency = 0)
            @php($rePayment = 0)
            @php($rePaymentBaseCurrency = 0)
            @php($interestCost = 0)
            @php($interestCostBaseCurrency = 0)
            @foreach($returnData as $returnDatum)
                <tr>
                    <td>{{$returnDatum->id}}</td>
                    <td>{{$returnDatum->duration}}</td>
                    <td>{{mYFormat(rnd($returnDatum->total_amount))}}</td>
                    @php($totalAmount += rnd($returnDatum->total_amount))
                    <td>{{mYFormat(rnd($returnDatum->total_amount_base_currency))}}</td>
                    @php($totalAmountBaseCurrency += rnd($returnDatum->total_amount_base_currency))
                    <td>{{mYFormat(rnd($returnDatum->fixed_amount))}}</td>
                    @php($totalFixedAmount += rnd($returnDatum->fixed_amount))
                    <td>{{mYFormat(rnd($returnDatum->fixed_amount_base_currency))}}</td>
                    @php($totalFixedAmountBaseCurrency += rnd($returnDatum->fixed_amount_base_currency))
                    <td>{{mYFormat(rnd($returnDatum->repayment_of_loan))}}</td>
                    @php($rePayment += rnd($returnDatum->repayment_of_loan))
                    <td>{{mYFormat(rnd($returnDatum->repayment_of_loan_base_currency))}}</td>
                    @php($rePaymentBaseCurrency += rnd($returnDatum->repayment_of_loan_base_currency))
                    <td>{{mYFormat(rnd($returnDatum->interest_cost))}}</td>
                    @php($interestCost += rnd($returnDatum->interest_cost))
                    <td>{{mYFormat(rnd($returnDatum->interest_cost_base_currency))}}</td>
                    @php($interestCostBaseCurrency += rnd($returnDatum->interest_cost_base_currency))
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>@lang('master.Total')</th>
                <th></th>
                <th>{{mYFormat($totalAmount)}}</th>
                <th>{{mYFormat($totalAmountBaseCurrency)}}</th>
                <th>{{mYFormat($totalFixedAmount)}}</th>
                <th>{{mYFormat($totalFixedAmountBaseCurrency)}}</th>
                <th>{{mYFormat($rePayment)}}</th>
                <th>{{mYFormat($rePaymentBaseCurrency)}}</th>
                <th>{{mYFormat($interestCost)}}</th>
                <th>{{mYFormat($interestCostBaseCurrency)}}</th>
            </tr>
            </tfoot>
        </table>
    </div>
@endif