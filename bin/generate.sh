#
# Generate the OpenAPI client code, including models.
# Do `composer update` first to pull in the dependency tools.
#
# For now we will generate the four APIs over the top of each other,
# with the assumption that no models will clash. If they do, this can
# be revisited.
#

# Directory for this script

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"

${DIR}/../vendor/consilience/openapi-generator-psr18/bin/generate.sh \
    --spec=${DIR}/../openapi/pi-docs.yaml \
    --namespace=Academe\\SagePay\\PiSdk \
    --generated=${DIR}/../api/

