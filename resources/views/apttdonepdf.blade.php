<!DOCTYPE html>
<html>
<body>
    <table>
        <tbody>
            <tr>
                <td>
                    <h2><i>HEMATOLOGY</i></h2>
                </td>
            </tr>
            <tr><td></td></tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td style="width:15%;"><b>Name:</b></td>
                <td style="width:45%;"><b style="font-size: 12pt;">{{$info->f_name}} {{$info->m_name}} {{$info->l_name}}</b></td>
                <td style="width:16%;"><b>O.R. No.:</b></td>
                <td style="width:24%;">{{$receipt_number}}</td>
            </tr>
            <tr>
                <td style="width:15%;"><b>Address:</b></td>
                <td style="width:45%;">{{$info->address}}</td>
                <td style="width:16%;"><b>Sex / Age:</b></td>
                <td style="width:24%;">{{$info->gender}} / {{$info->age}}</td>
            </tr>
            <tr>
                <td style="width:15%;"></td>
                <td style="width:45%;"></td>
                <td style="width:16%;"><b>Date:</b></td>
                <td style="width:24%;">{{$Aptt->date_reg}}</td>
            </tr>
            <tr><td></td></tr>
        </tbody>
    </table>

    @if(!$Aptt->hematocrit_desc && !$Aptt->hemoglobin_desc && !$Aptt->wbc_desc)
    @else
    <table>
        <tbody>
            <tr>
                <td style="width:50%;"><b style="font-size: 12pt;">CBC</b></td>
            </tr>
            @if(!$Aptt->hematocrit_desc)
            @else
            <tr>
                <td style="width:5%;"></td>
                <td style="width:20%;">&nbsp;Hematocrit</td>
                <td style="width:25%;text-align: center;"> <i><b>{{$Aptt->hematocrit_desc}}</b></i></td>
                <td style="width:6%;text-align: center;"> %</td>
                <td style="width:25%;text-align: center;"> F42 ± 5<br> M47 ± 7</td>
            </tr>
            @endif
            @if(!$Aptt->hemoglobin_desc)
            @else
            <tr>
                <td style="width:5%;"></td>
                <td style="width:20%;">&nbsp;Hemoglobin</td>
                <td style="width:25%;text-align: center;"> <i><b>{{$Aptt->hemoglobin_desc}}</b></i></td>
                <td style="width:6%;text-align: center;"> %</td>
                <td style="width:25%;text-align: center;"> F14 ± 2</td>
            </tr>
            @endif
            @if(!$Aptt->wbc_desc)
            @else
            <tr>
                <td style="width:5%;"></td>
                <td style="width:20%;">&nbsp;WBC</td>
                <td style="width:25%;text-align: center;"> <i><b>{{$Aptt->wbc_desc}}</b></i></td>
                <td style="width:6%;text-align: center;">T/mm</td>
                <td style="width:25%;text-align: center;"> 3A5 10<br> CH6 13</td>
            </tr>
            @endif
            <tr><td></td></tr>
        </tbody>
    </table>
    @endif

    @if(!$Aptt->dc_band && !$Aptt->dc_pmn && !$Aptt->dc_baso && !$Aptt->dc_eos && !$Aptt->dc_mono && !$Aptt->dc_lymph)
    @else
    <table>
        <tbody>
            <tr>
                <td style="width:50%;"><b style="font-size: 12pt;">Differential Count %</b></td>
            </tr>
            <tr>
                <td style="width:5%;"></td>
                <td style="border: 1px solid black;width:13%;text-align: center;"> BAND<br> 0 - 10</td>
                <td style="border: 1px solid black;width:12%;text-align: center;"> PMN<br> 53 - 70</td>
                <td style="border: 1px solid black;width:13%;text-align: center;"> BASO<br> 0 - 1</td>
                <td style="border: 1px solid black;width:12%;text-align: center;"> EOS<br> 1 - 4</td>
                <td style="border: 1px solid black;width:13%;text-align: center;"> MONO<br> 1 - 6</td>
                <td style="border: 1px solid black;width:13%;text-align: center;"> LYMPHS<br> 20 - 36</td>
            </tr>
            <tr>
                <td style="width:5%;"></td>
                <td style="border: 1px solid black;width:13%;text-align: center;"> <b>{{$Aptt->dc_band}}</b></td>
                <td style="border: 1px solid black;width:12%;text-align: center;"> <b>{{$Aptt->dc_pmn}}</b></td>
                <td style="border: 1px solid black;width:13%;text-align: center;"> <b>{{$Aptt->dc_baso}}</b></td>
                <td style="border: 1px solid black;width:12%;text-align: center;"> <b>{{$Aptt->dc_eos}}</b></td>
                <td style="border: 1px solid black;width:13%;text-align: center;"> <b>{{$Aptt->dc_mono}}</b></td>
                <td style="border: 1px solid black;width:13%;text-align: center;"> <b>{{$Aptt->dc_lymph}}</b></td>
            </tr>
            <tr><td></td></tr>
        </tbody>
    </table>
    @endif

    @if(!$Aptt->platelet_count && !$Aptt->rbc_desc)
    @else
    <table>
        <tbody>
            @if(!$Aptt->platelet_count)
            @else
            <tr>
                <td style="width:25%;"><b style="font-size: 12pt;">Platelet</b> Count :</td>
                <td style="width:20%;text-align: center;"> <i><b>{{$Aptt->platelet_count}}</b></i></td>
                <td style="width:15%;text-align: center;"> N:150-400 <br> T/mm*</td>
            </tr>
            <tr><td></td></tr>
            @endif
            @if(!$Aptt->rbc_desc)
            @else
            <tr>
                <td style="width:25%;"><b style="font-size: 12pt;">RBC</b></td>
                <td style="width:20%;text-align: center;"> <i><b>{{$Aptt->rbc_desc}}</b></i></td>
                <td style="width:15%;text-align: center;"> MIL/mm4</td>
            </tr>
            <tr>
                <td style="width:25%;"></td>
                <td style="width:20%;text-align: center;">F4-5.5 M4.5-6.0</td>
                <td style="width:15%;"></td>
            </tr>
            <tr><td></td></tr>
            @endif
        </tbody>
    </table>
    @endif

    @if(!$Aptt->control_desc && !$Aptt->patient_desc && !$Aptt->a_desc && !$Aptt->mcv_desc && !$Aptt->mch_desc && !$Aptt->mchc_desc)
    @else
    <table>
        <tbody>
            @if(!$Aptt->control_desc && !$Aptt->patient_desc && !$Aptt->a_desc)
            @else
            <tr>
                <td style="width:50%;"><b style="font-size: 12pt;">PRO TIME</b></td>
            </tr>
            @if(!$Aptt->control_desc)
            @else
            <tr>
                <td style="width:5%;"></td>
                <td style="width:20%;">&nbsp;Control</td>
                <td style="width:20%;text-align: center;"> <i><b>{{$Aptt->control_desc}}</b></i></td>
                <td style="width:15%;text-align: center;"> sec.</td>
            </tr>
            @endif
            @if(!$Aptt->patient_desc)
            @else
            <tr>
                <td style="width:5%;"></td>
                <td style="width:20%;">&nbsp;Patient</td>
                <td style="width:20%;text-align: center;"> <i><b>{{$Aptt->patient_desc}}</b></i></td>
                <td style="width:15%;text-align: center;"> sec.</td>
            </tr>
            @endif
            @if(!$Aptt->a_desc)
            @else
            <tr>
                <td style="width:5%;"></td>
                <td style="width:20%;">&nbsp;%A</td>
                <td style="width:35%;text-align: center;"> <i><b>{{$Aptt->a_desc}}</b></i></td>
            </tr>
            @endif
            @endif
            @if(!$Aptt->mcv_desc && !$Aptt->mch_desc && !$Aptt->mchc_desc)
            @else
            <tr>
                <td style="width:50%;"><b style="font-size: 12pt;">CELL INDICES</b></td>
            </tr>
            @if(!$Aptt->mcv_desc)
            @else
            <tr>
                <td style="width:5%;"></td>
                <td style="width:20%;">&nbsp;MCV</td>
                <td style="width:20%;text-align: center;"> <i><b>{{$Aptt->mcv_desc}}</b></i></td>
                <td style="width:15%;text-align: center;"> 80 - 90</td>
            </tr>
            @endif
            @if(!$Aptt->mch_desc)
            @else
            <tr>
                <td style="width:5%;"></td>
                <td style="width:20%;">&nbsp;INDICES MCH</td>
                <td style="width:20%;text-align: center;"> <i><b>{{$Aptt->mch_desc}}</b></i></td>
                <td style="width:15%;text-align: center;"> 21 - 31 pg</td>
            </tr>
            @endif
            @if(!$Aptt->mchc_desc)
            @else
            <tr>
                <td style="width:5%;"></td>
                <td style="width:20%;">&nbsp;MCHC</td>
                <td style="width:20%;text-align: center;"> <i><b>{{$Aptt->mchc_desc}}</b></i></td>
                <td style="width:15%;text-align: center;"> 33 - 38 %</td>
            </tr>
            @endif
            @endif
            <tr><td></td></tr>
        </tbody>
    </table>
    @endif

    @if(!$Aptt->clottinglw_time && !$Aptt->clotting_time && !$Aptt->bleedingdm_time && !$Aptt->grp_desc && !$Aptt->rh_desc && !$Aptt->esr_desc)
    @else
    <table>
        <tbody>
            @if(!$Aptt->clottinglw_time)
            @else
            <tr>
                <td style="width:40%;"> <b>Clotting(Lee & White)</b><br> Time : <i><b>{{$Aptt->clottinglw_time}}</b></i></td>
                <td style="width:20%;text-align: center;"> N:6-17 min.</td>
            </tr>
            @endif
            @if(!$Aptt->clotting_time)
            @else
            <tr>
                <td style="width:40%;"> <b>Clotting</b><br> Time : <i><b>{{$Aptt->clotting_time}}</b></i></td>
                <td style="width:20%;text-align: center;"> N:3-5 min.</td>
            </tr>
            @endif
            @if(!$Aptt->bleedingdm_time)
            @else
            <tr>
                <td style="width:40%;"> <b>Bleeding(Duke Method)</b><br> Time : <i><b>{{$Aptt->bleedingdm_time}}</b></i></td>
                <td style="width:20%;text-align: center;"> N:1-3 min.</td>
            </tr>
            @endif
            @if(!$Aptt->grp_desc)
            @else
            <tr>
                <td style="width:40%;"> <b>GRP : </b> <i><b>{{$Aptt->grp_desc}}</b></i></td>
            </tr>
            @endif
            @if(!$Aptt->rh_desc)
            @else
            <tr>
                <td style="width:40%;"> <b>Rh. : </b> <i><b>{{$Aptt->rh_desc}}</b></i></td>
            </tr>
            @endif
            @if(!$Aptt->esr_desc)
            @else
            <tr>
                <td style="width:40%;"> <b>APTT : </b> <i><b>{{$Aptt->esr_desc}}</b></i></td>
            </tr>
            @endif
            <tr><td></td></tr>
        </tbody>
    </table>
    @endif

    <table>
        <tbody>
            <tr><td></td></tr>
            <tr><td></td></tr>
        </tbody>
    </table>

    <table>
        <tbody>
            <tr>
                <td style="width:50%;text-align: center;"><u><b style="font-size: 12pt;">ROGELIO S. McNTIRE, M.D.,FPSP</b></u></td>
                <td style="width:50%;"> ____________________________________, RMT</td>
            </tr>
            <tr>
                <td style="width:50%;text-align:center;">Pathologist</td>
                <td style="width:50%;"></td>
            </tr>
        </tbody>
    </table>
</body>
</html>