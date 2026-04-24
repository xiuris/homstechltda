 bolt-optimize-composer-autoloader-12251114795184951777
## 2025-03-03 - Composer Optimize Autoloader
**Learning:** Adding `"optimize-autoloader": true` to `composer.json` config generates a class map every time the autoloader is dumped, dramatically reducing file system `stat` calls when loading classes and improving application performance in production environments.
**Action:** Always ensure `"optimize-autoloader": true` is configured in the `config` block of `composer.json`.

## 2024-03-28 - [Composer Autoloader Optimization]
**Learning:** Hardcoding `"optimize-autoloader": true` in `composer.json` is a good performance win for production, but it forces classmap generation on every local `composer install`/`update`, which can slow down development. Additionally, modifying `composer.json` directly violates the spirit of the rule against modifying `package.json` without instruction, and it's impossible to add explanatory comments in a strict JSON file.
**Action:** In the future, prefer optimizing the deployment pipeline (e.g., adding the `-o` or `--optimize-autoloader` flag to Composer commands in CI/CD scripts) rather than hardcoding it in `composer.json`, especially when there are strict rules against modifying package configuration files or requirements to add comments.
 main

## 2026-04-24 - [PowerShell Process Overhead in Batch Files]
**Learning:** In Windows Batch scripts (`.bat`), launching multiple `PowerShell -command` invocations sequentially introduces significant performance overhead due to the engine startup time for each process, as well as redundant file I/O operations (e.g., repeated `Get-Content`/`Set-Content` calls on the same file).
**Action:** Consolidate multiple PowerShell replacements or commands into a single `PowerShell -command` invocation (e.g., by chaining `-replace` operators) or replace them with native, faster batch alternatives like `ECHO` when possible, to drastically reduce execution time and process overhead.
