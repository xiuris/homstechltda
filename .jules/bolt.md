
## $(date +%Y-%m-%d) - Process invocation batching in installers
**Learning:** Shell/batch scripts on both Linux and Windows incur high overhead for repeated engine starts (like `PowerShell` and `sed`). Sequential operations reading and writing the same configuration file (`.env`) dramatically compound this performance penalty.
**Action:** When performing multiple stream edits (`sed -i`) or PowerShell replacements (`-replace`), always chain the operations together into a single execution block (`sed -e ... -e ...` or `PowerShell -replace ... -replace ...`).
