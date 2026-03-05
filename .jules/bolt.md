## 2025-03-03 - [Consolidating File Edits in Scripts]
**Learning:** Sequential multiple string replacements on the same file in bash (`sed -i`) and batch (`PowerShell -command`) incur significant startup overhead and unnecessary file I/O operations because they invoke multiple processes and read/write the file multiple times.
**Action:** Consolidate multiple string replacement edits on a single file into a single execution command whenever possible (e.g., passing multiple `-e` expression flags to `sed`, or using chained `-replace` operators inside a single PowerShell execution block).
