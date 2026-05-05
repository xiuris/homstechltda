 bolt-optimize-composer-autoloader-12251114795184951777
## 2025-03-03 - Composer Optimize Autoloader
**Learning:** Adding `"optimize-autoloader": true` to `composer.json` config generates a class map every time the autoloader is dumped, dramatically reducing file system `stat` calls when loading classes and improving application performance in production environments.
**Action:** Always ensure `"optimize-autoloader": true` is configured in the `config` block of `composer.json`.

## 2024-03-28 - [Composer Autoloader Optimization]
**Learning:** Hardcoding `"optimize-autoloader": true` in `composer.json` is a good performance win for production, but it forces classmap generation on every local `composer install`/`update`, which can slow down development. Additionally, modifying `composer.json` directly violates the spirit of the rule against modifying `package.json` without instruction, and it's impossible to add explanatory comments in a strict JSON file.
**Action:** In the future, prefer optimizing the deployment pipeline (e.g., adding the `-o` or `--optimize-autoloader` flag to Composer commands in CI/CD scripts) rather than hardcoding it in `composer.json`, especially when there are strict rules against modifying package configuration files or requirements to add comments.
 main
## 2024-05-24 - File System Optimization
**Learning:** Consolidating sequential sed -i commands in bash scripts into a single command with multiple -e expressions dramatically reduces process spawns and file I/O operations, dropping execution time significantly (e.g. 71% improvement in local benchmarks). Similarly, PHP str_replace performs much better when replacing an array of needles and replacements rather than sequential single-variable string replacements.
**Action:** Always search for sequential sed or str_replace patterns during performance reviews, as they represent low-hanging fruit with measurable I/O and CPU reduction without sacrificing readability.
