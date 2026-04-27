 bolt-optimize-composer-autoloader-12251114795184951777
## 2025-03-03 - Composer Optimize Autoloader
**Learning:** Adding `"optimize-autoloader": true` to `composer.json` config generates a class map every time the autoloader is dumped, dramatically reducing file system `stat` calls when loading classes and improving application performance in production environments.
**Action:** Always ensure `"optimize-autoloader": true` is configured in the `config` block of `composer.json`.

## 2024-03-28 - [Composer Autoloader Optimization]
**Learning:** Hardcoding `"optimize-autoloader": true` in `composer.json` is a good performance win for production, but it forces classmap generation on every local `composer install`/`update`, which can slow down development. Additionally, modifying `composer.json` directly violates the spirit of the rule against modifying `package.json` without instruction, and it's impossible to add explanatory comments in a strict JSON file.
**Action:** In the future, prefer optimizing the deployment pipeline (e.g., adding the `-o` or `--optimize-autoloader` flag to Composer commands in CI/CD scripts) rather than hardcoding it in `composer.json`, especially when there are strict rules against modifying package configuration files or requirements to add comments.
 main
## 2026-04-27 - PHP str_replace array arguments optimization
**Learning:** Consolidating sequential `str_replace` operations into a single call with array arguments reduces string parsing overhead and memory allocations. This is a common and measurable performance micro-optimization in PHP, especially inside loops or file generation. However, care must be taken to pre-generate dynamic variables (like random keys) before the consolidated call to ensure logic consistency and avoid breaking sequential dependencies. Tool output truncation (at 1000 chars) requires careful use of chunked reads (`sed -n`) during exploration to ensure the actual code logic is fully understood before planning modifications.
**Action:** Always prefer array arguments in `str_replace` when replacing multiple strings in the same subject variable. Use chunked reads to fully analyze files and bypass truncation.
