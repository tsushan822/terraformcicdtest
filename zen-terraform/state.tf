terraform{
    backend "s3" {
        bucket = "zen-terraform"
        encrypt = false
        key = "terraform.tfstate"
        region = "ap-south-1"
    }
}

provider "aws" {
    region = "ap-south-1"
}