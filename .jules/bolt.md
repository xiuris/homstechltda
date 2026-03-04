## 2025-03-04 - Consolidate PowerShell Commands in Batch Scripts
**Learning:** Multiple sequential `PowerShell -command` invocations in batch scripts introduce significant performance overhead due to repeated engine startups and file I/O operations.
**Action:** Consolidate multiple `-replace` operations or multiple PowerShell script block executions into a single invocation whenever modifying the same file or executing related operations to reduce startup overhead.

## 2025-03-04 - Consolidate sed Commands in Bash Scripts
**Learning:** Running multiple sequential `sed -i` commands on the same file in a bash script triggers multiple process spawns and redundant file reads/writes, causing performance degradation especially on slower storage.
**Action:** Combine multiple text replacements into a single `sed` invocation using multiple `-e` expression flags (e.g., `sed -i -e 's/a/b/' -e 's/c/d/' file`) to streamline operations and minimize I/O overhead.
