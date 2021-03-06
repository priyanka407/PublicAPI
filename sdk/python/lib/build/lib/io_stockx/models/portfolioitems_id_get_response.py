# coding: utf-8

"""
    StockX API

    PRERELEASE API - Subject to change before release. Provides access to StockX's public services, allowing end users to query for product and order information.  # noqa: E501

    OpenAPI spec version: 1.0.0
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six

from io_stockx.models.portfolioitems_id_get_response_portfolio_item import PortfolioitemsIdGetResponsePortfolioItem  # noqa: F401,E501


class PortfolioitemsIdGetResponse(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    """

    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'portfolio_item': 'PortfolioitemsIdGetResponsePortfolioItem'
    }

    attribute_map = {
        'portfolio_item': 'PortfolioItem'
    }

    def __init__(self, portfolio_item=None):  # noqa: E501
        """PortfolioitemsIdGetResponse - a model defined in Swagger"""  # noqa: E501

        self._portfolio_item = None
        self.discriminator = None

        self.portfolio_item = portfolio_item

    @property
    def portfolio_item(self):
        """Gets the portfolio_item of this PortfolioitemsIdGetResponse.  # noqa: E501


        :return: The portfolio_item of this PortfolioitemsIdGetResponse.  # noqa: E501
        :rtype: PortfolioitemsIdGetResponsePortfolioItem
        """
        return self._portfolio_item

    @portfolio_item.setter
    def portfolio_item(self, portfolio_item):
        """Sets the portfolio_item of this PortfolioitemsIdGetResponse.


        :param portfolio_item: The portfolio_item of this PortfolioitemsIdGetResponse.  # noqa: E501
        :type: PortfolioitemsIdGetResponsePortfolioItem
        """
        if portfolio_item is None:
            raise ValueError("Invalid value for `portfolio_item`, must not be `None`")  # noqa: E501

        self._portfolio_item = portfolio_item

    def to_dict(self):
        """Returns the model properties as a dict"""
        result = {}

        for attr, _ in six.iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """Returns the string representation of the model"""
        return pprint.pformat(self.to_dict())

    def __repr__(self):
        """For `print` and `pprint`"""
        return self.to_str()

    def __eq__(self, other):
        """Returns true if both objects are equal"""
        if not isinstance(other, PortfolioitemsIdGetResponse):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
