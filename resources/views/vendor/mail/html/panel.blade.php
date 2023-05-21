<table class="panel" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td class="card-content">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="card-item">
                        {{ Illuminate\Mail\Markdown::parse($slot) }}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
