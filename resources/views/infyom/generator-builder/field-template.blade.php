<td style="vertical-align: middle">
    <input type="text" name="field_name" style="width: 100%" required class="form-control txtFieldName"/>
</td>
<td style="vertical-align: middle">
    <select class="form-control txtdbType" name="txtdbType">
              <option value="increments">INCREMENTS</option>
              <option value="bigIncrements">BIG INCREMENTS</option>
              <option value="timestamps">TIME STAMPS</option>
              <option value="softDeletes">SOFT DELETES</option>
              <option value="rememberToken">REMEMBER TOKEN</option>
              <option disabled="disabled">-</option>
              <option value="string" selected="selected">STRING</option>
              <option value="text" class="text">TEXT</option>
              <option disabled="disabled">-</option>
              <option value="tinyInteger">TINY INTEGER</option>
              <option value="smallInteger">SMALL INTEGER</option>
              <option value="mediumInteger">MEDIUM INTEGER</option>
              <option value="integer">INTEGER</option>
              <option value="bigInteger">BIG INTEGER</option>
              <option disabled="disabled">-</option>
              <option value="float">FLOAT</option>
              <option value="decimal">DECIMAL</option>
              <option value="boolean">BOOLEAN</option>
              <option disabled="disabled">-</option>
              <option value="enum">ENUM</option>
              <option disabled="disabled">-</option>
              <option value="date">DATE</option>
              <option disabled="disabled">-</option>
              <option value="binary">BINARY</option>
            </select>

</td>
<td style="vertical-align: middle">
    <select class="form-control txtValidation" multiple name="txtValidation" style="width:100%">
        <option value="required" class="required">Required</option>
        <option value="email" class="email">Email</option>
        <option value="date" class="date" disabled>Date</option>
        <option value="integer" class="integer">Integer</option>
        <option value="boolean" class="boolean" disabled>Boolean</option>
    </select>
</td>
<td style="vertical-align: middle">
    <select class="form-control drdHtmlType" name="drdHtmlType" style="width: 100%">
        <option value="text" class="text">Text</option>
        <option value="email" class="email1">Email</option>
        <option value="number" class="number1">Number</option>
        <option value="date"  class="date1" disabled>Date</option>
        <option value="file" class="file1" disabled>File</option>
        <option value="password" class="password1">Password</option>
        <option value="select" class="select1">Select</option>
        <option value="radio" class="radio" disabled>Radio</option>
        <option value="checkbox" class="checkbox" disabled>Checkbox</option>
        <option value="textarea" class="textarea">TextArea</option>
    </select>
    <input type="text" class="form-control htmlValue txtHtmlValue" style="display: none"
           placeholder=""/>
</td>
<td style="vertical-align: middle">
    <div class="checkbox" style="text-align: center">
        <label style="padding-left: 0px">
            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkPrimary"/>
        </label>
    </div>
</td>
{{--<td style="vertical-align: middle">--}}
{{--<div class="checkbox" style="text-align: center">--}}
{{--<label style="padding-left: 0px">--}}
{{--<input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkSearchable" checked/>--}}
{{--</label>--}}
{{--</div>--}}
{{--</td>--}}
<td style="vertical-align: middle">
    <div class="checkbox" style="text-align: center">
        <label style="padding-left: 0px">
            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkFillable" checked/>
        </label>
    </div>
</td>
<td style="vertical-align: middle">
    <div class="checkbox" style="text-align: center">
        <label style="padding-left: 0px">
            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkInForm" checked/>
        </label>
    </div>
</td>
<td style="vertical-align: middle">
    <div class="checkbox" style="text-align: center">
        <label style="padding-left: 0px">
            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkInIndex" checked/>
        </label>
    </div>
</td>
<td style="text-align: center;vertical-align: middle">
    <i onclick="removeItem(this)" class="livicon remove" data-name="remove-alt"
       data-size="18" data-loop="true" data-c="#f56954"
       data-hc="#f56954" style="cursor:pointer"
    ></i>
</td>

