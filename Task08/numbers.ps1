$numbersapiUrl = "http://numbersapi.com";

function Show-Date_Info {
    "Show-Date_Info"

    $date = Get-Date
    "Сегодня: " + $date.ToString("dd.mm.yyyy")

    Invoke-RestMethod ("$numbersapiUrl/" + $date.Day)
    Invoke-RestMethod ("$numbersapiUrl/" + $date.Month)
    Invoke-RestMethod ("$numbersapiUrl/" + $date.Year)
}

Show-Date_Info
