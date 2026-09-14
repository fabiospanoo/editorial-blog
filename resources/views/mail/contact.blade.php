<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuovo messaggio dal sito</title>
</head>
<body style="margin:0; padding:0; background-color:#050505; font-family:'Courier New', Courier, monospace; color:#f2f2f2;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#050505; padding:48px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="560" cellpadding="0" cellspacing="0" style="border-top:1px solid #181818; border-bottom:1px solid #181818; padding:40px 0; width:560px;">
                    <tr>
                        <td style="padding:0 32px;">
                            <p style="margin:0 0 24px 0; font-size:11px; color:#a0a0a0; text-transform:uppercase; letter-spacing:1px;">/ Nuovo messaggio</p>
                            <h1 style="margin:0 0 32px 0; font-size:26px; font-weight:400; letter-spacing:-1px; color:#f2f2f2;">Qualcuno ti ha scritto!</h1>

                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #181818; border-radius:0; margin-bottom:24px;">
                                <tr>
                                    <td style="padding:16px 20px; border-bottom:1px solid #181818;">
                                        <p style="margin:0; font-size:10px; color:#a0a0a0; text-transform:uppercase; letter-spacing:1px;">Nome</p>
                                        <p style="margin:4px 0 0 0; font-size:14px; color:#f2f2f2;">{{ $name }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:16px 20px; border-bottom:1px solid #181818;">
                                        <p style="margin:0; font-size:10px; color:#a0a0a0; text-transform:uppercase; letter-spacing:1px;">Email</p>
                                        <p style="margin:4px 0 0 0; font-size:14px; color:#f2f2f2;">{{ $email }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:16px 20px; background-color:#0d0d0d;">
                                        <p style="margin:0; font-size:10px; color:#a0a0a0; text-transform:uppercase; letter-spacing:1px;">Messaggio</p>
                                        <p style="margin:8px 0 0 0; font-size:14px; line-height:1.7; color:#f2f2f2; white-space:pre-line;">{{ $body }}</p>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin:0; font-size:11px; color:#626262; letter-spacing:1px;">Rispondi direttamente a {{ $email }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>