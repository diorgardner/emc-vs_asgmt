#This formula has not been tested
deploy_emc-vs_asgmt:
  git.latest:
    - name: https://github.com/diorgardner/emc-vs_asgmt.git
    - target: /var/www/
    - rev: prod
    - require:
      - pkg: git
