$desktopPath = [Environment]::GetFolderPath("Desktop")

$excelObj = New-Object -COM Excel.Application
$excelWorkBook = $excelObj.Workbooks.Add()
$excelWorkSheet = $excelWorkBook.Worksheets.Item(1)
$excelWorkSheet.Cells.Item(2, 2) = "Привет от PowerShell"
$excelWorkSheet.Cells.Item(2, 2).Font.Italic = $true
$excelWorkSheet.Cells.Item(2, 2).Font.size = 12
$excelWorkSheet.Columns.Item(2).ColumnWidth = 25
$excelWorkBook.SaveAs("$desktopPath\"+$env:UserName+"_"+$env:ComputerName+".xlsx")
$excelWorkBook.close($true)
